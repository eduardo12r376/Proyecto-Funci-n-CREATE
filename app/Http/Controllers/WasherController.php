<?php

namespace App\Http\Controllers;

use App\washer;
use Illuminate\Http\Request;

class WasherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $washers = washer::all();
        return view('washers.index', compact('washers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('washers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $washer = request()->except('_token');
        Washer::insert($washer);
        return view('washers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function show(washer $washer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function edit(washer $washer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, washer $washer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\washer  $washer
     * @return \Illuminate\Http\Response
     */
    public function destroy(washer $washer)
    {
        //
    }
}
