<?php

namespace App\Http\Controllers;

use App\Models\Compotition;
use Illuminate\Http\Request;

class CompotitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compotitions = Compotition::all() ;
        return view('compotition.index', compact('compotitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Compotition $compotition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compotition $compotition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compotition $compotition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compotition $compotition)
    {
        //
    }
}
