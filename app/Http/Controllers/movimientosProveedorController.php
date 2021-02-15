<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\CompraProveedor;
use App\modelos\CreditoProveedor;
use App\modelos\PagoProveedor;
use App\Http\Requests\CompraRequest;
use App\Http\Requests\CreditoRequest;
use App\Http\Requests\PagoProveedorRequest;

class movimientosProveedorController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $comprasCredito = CompraProveedor:: where(['forma_pago' => 'credito', 'credito' => 0,])->latest()->get();  
        $compras = CompraProveedor::latest()->get();
        $creditos = CreditoProveedor::latest()->get();
        $pagos = PagoProveedor::latest()->get();
    
        return view('movimientosProveedores.index', compact('compras', 'comprasCredito', 'creditos', 'pagos'));
    }

    public function storeCompras(CompraRequest $request)
    {
        
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {
            CompraProveedor::create($request->validated());
            return redirect()->route('movimientosProveedores.index');
        }
        else
        {
            return redirect()->route('home');
        }  
    }

    public function storeCreditos(CreditoRequest $request)
    {
        $id = $request->get('id_compras');
        $dias = $request->get('plazoDias');
        $numeroCuotas = $request->get('no_cuotas');
        $abono = $request->get('abono');
        $compra = CompraProveedor::where("id","=",$id)->get()->toArray();
        $totalCompra = $compra[0]['total'];
        $fechaAtual = Date('Y-m-d');
        $fechaVencimiento = date("Y-m-d",strtotime($fechaAtual."+ $dias days")); 
        $saldo = $totalCompra - $abono;
        $valorCuota = ceil($saldo/$numeroCuotas);
        $fechasPagos = ceil($dias/$numeroCuotas);
        
        $credito = new CreditoProveedor
        (
            [
                'id_compras'  =>  $id,
                'fechaInicio' =>  $fechaAtual,
                'fechaFin'    =>  $fechaVencimiento,
                'abono'       =>  $abono,
                'saldo'       =>  $saldo,
                'no_cuotas'   =>  $numeroCuotas,
                'valor_cuota' =>  $valorCuota,        
                'userCreate'  =>  $request->get('userCreate'),        
                'estado'      =>  '1',     
                'plazoDias'   =>  $dias,        

            ]
        );

        $credito->save();

        $setCredito = CompraProveedor::find($id);
        $setCredito->credito = 1;
        $setCredito->save();

        return redirect()->route('movimientosProveedores.index');
    }

    public function storePlanCuotas($idCompras)
    {
        $credito = CreditoProveedor::find($idCompras);
        
        $user = auth()->user()->name;

        $fechasPagos = ceil($credito->plazoDias/$credito->no_cuotas);
        $fechaAtual = Date('Y-m-d');
        $fechaCuota = date("Y-m-d",strtotime($fechaAtual."+ $fechasPagos days"));        
        

        for ($i=0; $i < $credito->no_cuotas  ; $i++)
        {  
            $pagos = new PagoProveedor
            (
                [
                    'id_credito_compras'  =>  $idCompras,
                    'no_cuota'            =>  $i+1,
                    'valor_cuota'         =>  $credito->valor_cuota,
                    'fecha_cuota'         =>  $fechaCuota,                    
                    'saldo'               =>  $credito->saldo, 
                    'userCreate'          =>  $user,        
                ]
            );

            $fechaCuota = date("Y-m-d",strtotime($fechaCuota."+ $fechasPagos days")); 

            $pagos->save();
        };

        $credito->estado = '2';
        $credito->save();

        return redirect()->route('movimientosProveedores.index');

    }

    public function pagoCuota(Request $request)
    {   
        
           
        $idCuota =   $request->id_cuota;
        $idCredito = $request->id_credito_compras;
        $credito = CreditoProveedor::find($idCredito);
        $cuota = PagoProveedor::find($idCuota);
        $pago = $request->Valor_pago; 
        $saldo = $credito->saldo;
        $abono = $credito->abono;
        $saldoPago = $saldo - $pago;        
        $abonoPago = $abono + $pago;        
        $credito->saldo = $saldoPago;
        $credito->abono = $abonoPago;        

        $credito->save();

        $comprasCredito = PagoProveedor:: where(['id_credito_compras' => $idCredito])->latest()->get();

        foreach ($comprasCredito as $comCr) {
            $comCr->saldo = $saldoPago; 
            $comCr->save();
        }

        $saldoCuota = $cuota->saldo;
        $textSaldo = $saldoCuota - $request->Valor_pago;

        $cuota->no_reciboCaja = $request->no_reciboCaja;
        $cuota->Valor_pago = $request->Valor_pago;
        $cuota->fecha_pago = $request->fecha_pago;
        $cuota->fecha_pago = $request->fecha_pago;
        $cuota->userPago = auth()->user()->name;
        $cuota->saldo = $saldo; 

        
        $cuota->save();

        return redirect()->route('movimientosProveedores.index');


    }
}
