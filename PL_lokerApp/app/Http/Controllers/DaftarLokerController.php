<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarLoker;
use App\Models\Loker;


class DaftarLokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $data['data'] = Loker::find($id);
        return view('inputanAlumni.daftarLoker', $data);
    }
    public function show()
    {
        //
        $data['data'] = DaftarLoker::all();
        return view('adminPage.datapengaju', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $eg)
    {
        //
        DaftarLoker::create([
            'email' => $eg->email,
            'jenisLoker' => $eg->jenisLoker,
            'pernyataan' => $eg->pernyataan,
            'status' => $eg->status
           
        ]);

        return redirect('/')->with('success', 'Data berhasil ditambahkan.');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
