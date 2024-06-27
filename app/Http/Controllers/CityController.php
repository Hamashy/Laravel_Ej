<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;



class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cities= City::all();
        return view("cities.index", compact("cities"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("cities.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $city = City::find($id);
        if ($city==null) 
            return response()->json(['message'=>'City not found'],404);
        return view("cities.show", compact("city"));    
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
