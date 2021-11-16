@extends('templates.main')
@section('contenido')
<div class="container-fluid contenido">
    <div class="container text-white" style="padding-top: 13%">
        <p class="fs-2 text-center" style="font-family: 'Calibri Light'">Por el momento solo hay login...
            <br>
            <a href="{{route('login')}}"><button type="button" class="btn btn-warning fs-3 ">LOGIN</button></a>
        </p>
    </div>
</div>
    @parent
@stop
