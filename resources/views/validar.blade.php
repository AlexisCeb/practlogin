@extends('templates.main')
@section('contenido')
    <div class="contenido" align="center">
        <div style="padding-top: 11%"></div>
        <div class="card mb-3 access {{$style}}" align="center">
            {{$msg}}
            <p align="center"><a href="{{route('inicio')}}"><button type="button" class="btn btn-warning fs-5">VOLVER A HOME</button></a></p>
        </div>
    </div>
@stop
