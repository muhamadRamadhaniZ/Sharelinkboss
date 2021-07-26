<?php

namespace App\Http\Controllers;

use App\Models\judul;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\judul  $judul
     * @return \Illuminate\Http\Response
     */
    public function show(judul $judul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\judul  $judul
     * @return \Illuminate\Http\Response
     */
    public function edit(judul $judul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\judul  $judul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, judul $judul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\judul  $judul
     * @return \Illuminate\Http\Response
     */
    public function destroy(judul $judul)
    {
        //
    }
}
