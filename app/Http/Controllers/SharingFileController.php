<?php

namespace App\Http\Controllers;

use App\Models\SharingFile;
use Illuminate\Http\Request;
class SharingFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->file;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new SharingFile;
        $dtUpload->file = $namaFile;
        
        $dtUpload->data_text = $request->data_text;

        $nm->move(public_path().'/data_file', $namaFile);
        // $dtUpload->save;

        $file = SharingFile::create([
            'file'=> $dtUpload->file,
            'data_text'=> $dtUpload->data_text
        ]);
        return view('show', compact('file'));
      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function show(Sharing $sharing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function edit(Sharing $sharing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sharing $sharing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sharing $sharing)
    {
        //
    }
}
