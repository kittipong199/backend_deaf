<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContentsResource;
use App\Models\contents;
use Illuminate\Http\Request;

class ContentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////แสดง ผล Content
        $content = contents::get();
        //return data
        return response()->json(ContentsResource::collection($content));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function show(Contents $contents,$id)
    {
        // get by ID and join table coures with contents


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contents $contents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contents $contents)
    {
        //
    }
}
