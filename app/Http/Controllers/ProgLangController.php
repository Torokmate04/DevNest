<?php

namespace App\Http\Controllers;

use App\Models\ProgLang;
use App\Http\Requests\StoreProgLangRequest;
use App\Http\Requests\UpdateProgLangRequest;

class ProgLangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proglang = ProgLang::all();
        return view('proglang.index', ['language' => $proglang]);
        
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
    public function store(StoreProgLangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgLang $progLang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgLang $progLang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgLangRequest $request, ProgLang $progLang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgLang $progLang)
    {
        //
    }
}
