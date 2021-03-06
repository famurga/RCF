<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Probeta;
use Illuminate\Http\Request;

class ProbetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$probetas = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
        $probetas = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
        $probetas = $probetas->get();
        return response()->json($probetas, 200);
    }

    public function busquedaSubcodigo($idtipoensayo)
    {
       
        //$probetas = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
        $idprobeta = Probeta::where('idtipoensayo','=',$idtipoensayo)->select('fechavaciado','fc','densidad','estado','aprobado','subcodigo');
        $idprobeta = $idprobeta->get();
        //$probetas = $probetas->get(1);
        return response()->json($idprobeta, 200);  
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function insertarRegistro(Request $request){
       /*  $request->validate([
            'name' => 'required',
            'code' => 'required | size:4 | unique:products',
            'descripcion' => 'required',   
        ]); */

        $probeta=Probeta::create([
            'diametro_superior_1' => $request->name,
            'diametro_inferior_1' => $request->code,
        ]);

        return response()->json($probeta, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Probeta  $probeta
     * @return \Illuminate\Http\Response
     */
    public function show(Probeta $probeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Probeta  $probeta
     * @return \Illuminate\Http\Response
     */
    public function updateRegistro(Request $request,$idtipoensayo,$subcodigo)
    {

        //$prob=Probeta::where('idtipoensayo','=',$idtipoensayo)->select('fechavaciado','fc','densidad','estado','aprobado','subcodigo');
        $probeta = Probeta::where([
            ['idtipoensayo','=',$idtipoensayo],
            ['subcodigo','=',$subcodigo],
        ])->first();
        //$probeta = Probeta::where('codigo','like','EC%')->select('codigo','fechavaciado','fecharotura','fc','densidad','estado','aprobado','subcodigo');
        //$probeta = $probeta->get();
        


        $probeta->diametro_superior_1= $request->diametro_superior_1;
        $probeta->diametro_inferior_1= $request->diametro_inferior_1;
        

        $probeta->save();
   
        return response()->json($probeta, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Probeta  $probeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Probeta $probeta)
    {
        //
    }
}
