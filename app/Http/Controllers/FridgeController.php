<?php

namespace App\Http\Controllers;

use App\Fridge;
use Illuminate\Http\Request;

class FridgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refrigerador = Fridge::all();
        return view('fridges.index', compact('refrigerador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fridges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fridge = request()->except('_token');
        Fridge::insert($fridge);
        return view('fridges.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function show(Fridge $fridge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function edit(Fridge $fridge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fridge $fridge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fridge $fridge)
    {
        //
    }
}
