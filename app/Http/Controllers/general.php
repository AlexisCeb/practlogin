<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{
    public function inicio () {
        return view( 'inicio');
    }
    public function login () {
        return view( 'login');
    }
    public function validar (Request $request) {
        $correo=$request ->input('correo');
        $contrasena=$request ->input('contrasena');
        $msg="Mensaje no definido";
        if ($correo=="alexisceballosc@gmail.com"){
            if ($contrasena=="12345"){
                $msg="ACCESO CONCEDIDAO";
                $style="yes";
            }else{
                $msg="ACCESO DENEGADO";
                $style="not";
            }
        }else{
            $msg="CORREO DESCONOCIDO";
            $style="idk";
        }
    return view( 'validar',['msg' =>$msg, 'style' => $style]);
}
}
