@extends('adminlte::page')

@section('title', 'Mundo Diesel-Almacen')

@section('content_header')
    <h1>Almacen</h1>
@stop

@section('content')
    <div class="container-fluid">
      <div class="row">

        {{-- <categorias --}}
        @include('almacen/tablas/categorias')
        <!-- ./col -->

        {{-- lineas --}}
        @include('almacen/tablas/lineas')
        <!-- ./col -->       

        {{-- Marcas --}}
        @include('almacen/tablas/marcas')
        <!-- ./col -->

        {{-- estantes  --}}
        @include('almacen/tablas/estantes')
        <!-- ./col -->             

        {{-- Marcas --}}
        @include('almacen/modals/modalCreateMarca')
        <!-- ./col -->

        {{-- Marcas --}}
        @include('almacen/modals/modalDeleteMarca')
        <!-- ./col -->

        {{-- Estante --}}
        @include('almacen/modals/modalCreateEstante')
        <!-- ./col -->

        {{-- Estante --}}
        @include('almacen/modals/modalDeleteEstante')
        <!-- ./col -->

        {{-- linea --}}
        @include('almacen/modals/modalCreateLinea')
        <!-- ./col -->

        {{-- linea --}}
        @include('almacen/modals/modalDeleteLinea')
        <!-- ./col -->

        {{-- categoria --}}
        @include('almacen/modals/modalCreateCategoria')
        <!-- ./col -->

        {{-- categoria --}}
        @include('almacen/modals/modalDeleteCategoria')
        <!-- ./col -->

      </div>     
    </div>
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   <script src="{{ asset('js/almacen.js') }}"></script>
   <script src="{{ asset('js/marcas.js') }}"></script>
   <script src="{{ asset('js/estantes.js') }}"></script>
   <script src="{{ asset('js/lineas.js') }}"></script>
   <script src="{{ asset('js/categorias.js') }}"></script>
@stop