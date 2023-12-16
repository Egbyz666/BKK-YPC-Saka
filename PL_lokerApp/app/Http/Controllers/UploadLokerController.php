<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UploadLokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('inputanAlumni.postingLoker');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $eg)
    {
        //
        Loker::create([
            'nis' => $eg->nis,
            'name' => $eg->name,
            'namaPerusahaan' => $eg->namaPerusahaan,
            'jenisLoker' => $eg->jenisLoker,
            'gaji' => $eg->gaji,
            'deskripsiLoker' => $eg->deskripsiLoker,
            'status' => $eg->status,
            'foto' => $eg->file('foto')->store('foto')
        ]);

        return redirect()->route('uploadLoker')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showInDashboard()
    {
        //
        $data['data'] = Loker::all();
        $data['user']= User::all();
        return view('adminPage.dashboard', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['data'] = Loker::find($id);
        return view('adminPage.editLoker', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        if ($req->file('foto')) {
            $loker = Loker::where('id', $req->id)->first();

            Storage::delete($loker->foto);


            $file = $req->file('foto')->store('foto');
        } else {
            $file = DB::raw('foto');
        }

        Loker::where('id', $req->id)->update([
            'nis' => $req->nis,
            'name' => $req->name,
            'namaPerusahaan' => $req->namaPerusahaan,
            'jenisLoker' => $req->jenisLoker,
            'gaji' => $req->gaji,
            'deskripsiLoker' => $req->deskripsiLoker,
            'status' => $req->status,
            'foto' => $file
        ]);

        return redirect('dashboard');
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
