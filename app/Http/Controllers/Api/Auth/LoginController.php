<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'usuario' => 'required|string',
            'contraseña' =>'required|string'
        ]);

        $login = Login::where('usuario', $request->usuario)->firstOrFail();

        if( $request->contraseña == $login->contraseña){

            return $login;
        }else{
            return response()->json(['message'=> 'Contraseña incorrecta, verifique por favor'],404);
        }
    }
}
