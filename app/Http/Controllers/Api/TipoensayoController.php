<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tipoensayo;
use Illuminate\Http\Request;

class TipoensayoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$probetas = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2021')->select('codigo','fechaentrega','estado','urgente');
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2021')->select('codigo','fechaentrega','estado','urgente');
         
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2022')->where('codigo','like','EC%')->where('estado', '=','con muestra')->orWhere('estado', '=','sin muestra')
         $ensayo = Tipoensayo::where([
            ['fechaentrega','like','%2022'],
            ['codigo','like','EC%'],
        ])
        ->select('codigo','fechaentrega','estado','urgente','idtipoensayo')->orderBy('codigo');
         //$ensayo = $ensayo->paginate(30);
         $ensayo = $ensayo->get();
         return response()->json($ensayo, 200);

    }
    public function Pendientes()
    {
         //$probetas = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2021')->select('codigo','fechaentrega','estado','urgente');
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2021')->select('codigo','fechaentrega','estado','urgente');
         
         $ensayo = Tipoensayo::where('fechaentrega','like','%2022')->where('codigo','like','EC%')->where('estado', '=','con muestra')->orWhere('estado', '=','sin muestra')
         ->select('codigo','fechaentrega','estado','urgente','idtipoensayo')->orderBy('codigo');
         /* $ensayo = Tipoensayo::where([
            ['fechaentrega','like','%2022'],
            ['codigo','like','EC%'],
            ['estado', '=','con muestra'],
            //['estado', '=','sin muestra'],
        ])->select('codigo','fechaentrega','estado','urgente','idtipoensayo')->orderBy('codigo'); */
         //$ensayo = $ensayo->paginate(30);
         $ensayo = $ensayo->get();
         return response()->json($ensayo, 200);

    }
    public function Terminados()
    {
         //$probetas = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2021')->select('codigo','fechaentrega','estado','urgente');
         //$ensayo = Tipoensayo::where('fechaentrega','like','%2021')->select('codigo','fechaentrega','estado','urgente');
         
         $ensayo = Tipoensayo::where('fechaentrega','like','%2022')->orWhere('codigo','like','EC%')->orWhere('estado', '=','documento entregado')->orWhere('estado', '=','documento emitido')
         /* $ensayo = Tipoensayo::where([
            ['fechaentrega','like','%2022'],
            ['codigo','like','EC%'],
            ['estado', '=','documento emitido'],
        ]) */
        
        ->select('codigo','fechaentrega','estado','urgente','idtipoensayo')->orderBy('codigo');
         //$ensayo = $ensayo->paginate(30);
         $ensayo = $ensayo->get();
         return response()->json($ensayo, 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipoensayo  $tipoensayo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipoensayo $tipoensayo)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipoensayo  $tipoensayo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoensayo $tipoensayo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipoensayo  $tipoensayo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipoensayo $tipoensayo)
    {
        //
    }
}
