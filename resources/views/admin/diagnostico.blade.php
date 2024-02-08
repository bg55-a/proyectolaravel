
@extends('adminlte::page')

@section('title', 'Diagnostico')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-left"> <img src="{{asset('img/paisaje.png')}}" style="width: 50px; height: 50px;"> Mip </h1>
            </div>
        </div>
    </div>
@stop

@section('content')
    <h5 class="text-center">Diagnostico</h5>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop