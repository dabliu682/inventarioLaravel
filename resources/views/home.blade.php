@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de control</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-12">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Clientes</h3>
              <h5>{{ $no_clientes }}</h5>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <a href="{{ route('clientes.index') }}" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-12">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
                <h3>Proveedores</h3>
                <h5>{{ $no_provedores }}</h5>
            </div>
            <div class="icon">
                <i class="fas fa-luggage-cart"></i>
            </div>
            <a href="{{ route('proveedores.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-12">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>Almacen</h3>

              <p>1783</p>
            </div>
            <div class="icon">
                <i class="fas fa-building"></i>
            </div>
            <a href="{{ route('almacen.index') }}" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-12">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Inventario</h3>

              <p>Ultima entada: 1/02/2021</p>
            </div>
            <div class="icon">
                <i class="fas fa-paste"></i>
            </div>
            <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>  
        <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Facturación</h3>            
              </div>
              <div class="icon">
                <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>   
        <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Informes</h3>
              </div>
              <div class="icon">
                <i class="fas fa-file-pdf"></i>
              </div>
              <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>      
      </div>     
    </div>
  </section>
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop