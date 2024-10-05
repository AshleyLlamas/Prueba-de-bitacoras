@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Inicio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col text-center">
            <div class="info-box bg-white">
                <div class="info-box-content">
                <span class="info-box-number h1">{{ $users->count() }}</span>
                <span class="info-box-text">Usuarios</span>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="info-box bg-withe">
                <div class="info-box-content">
                <span class="info-box-number h1">20</span>
                <span class="info-box-text">Bitácoras</span>
                </div>
            </div>
        </div>
    </div>
	<p>Bienvenido</p>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	<script> console.log('Hi!'); </script>
@stop
