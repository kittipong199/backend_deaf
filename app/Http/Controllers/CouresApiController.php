<?php

namespace App\Http\Controllers;

use App\Http\Resources\CouresResource;
use App\Models\coures;
use Illuminate\Http\Request;

class CouresApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //แสดง data
        $coures = coures::get();

        //return data
        return response()->json(CouresResource::collection($coures));
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
     * @param  \App\Models\coures  $coures
     * @return \Illuminate\Http\Response
     */
    public function show(coures $coures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coures  $coures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coures $coures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coures  $coures
     * @return \Illuminate\Http\Response
     */
    public function destroy(coures $coures)
    {
        //
    }
}
