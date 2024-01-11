
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="text-center"><b>MIP</b></h1>
@stop

@section('content')
    <h5 class="text-center">Bienvenid@ <b>{{ Auth::user()->name }}</b></h5>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop