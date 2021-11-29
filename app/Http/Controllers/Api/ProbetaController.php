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
        $probetas = Probeta::all();
        return response()->json($probetas, 200);
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
    public function update(Request $request, Probeta $probeta)
    {
        //
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
