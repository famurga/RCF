<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function indexVernier()
    {
        $equipo=Equipo::where('item','like','VE%')->orWhere('item', 'like','ve%')
         ->select('item','codigo','iditem');
         $equipo = $equipo->get();
         return response()->json($equipo, 200);
    }

    public function indexBalanza()
    {
        $equipo=Equipo::where('item','like','BALA%')->orWhere('item', 'like','Bala%')
         ->select('item','codigo','iditem');
         $equipo = $equipo->get();
         return response()->json($equipo, 200);
    }
    public function indexPrensa()
    {
        $equipo=Equipo::where('item','like','PREN%')->orWhere('item', 'like','pren%')
         ->select('item','codigo','iditem');
         $equipo = $equipo->get();
         return response()->json($equipo, 200);
    }

    public function indexAlmohadilla()
    {
        $equipo=Equipo::where('item','like','ALMO%')->orWhere('item', 'like','almo%')
         ->select('item','codigo','iditem');
         $equipo = $equipo->get();
         return response()->json($equipo, 200);
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
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
