<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('adminPage.login');
    }

    public function addprofile(){
        return view('adminPage.addProfile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminPage.register');
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
        $validate = $request->validate([
           'name' => ['required'],
           'nis' => ['required'],
           'address' => ['required'],
           'angkatan' => ['required'],
           'noHp' => ['required'],
           'email' => ['required'],
           'password' => ['','required'],
           'role' => ['required'],
        //    'foto' => ['file'],
        ]);


       
        User::create($validate);
        return redirect()->route('admin.login')->with('success', 'Data berhasil ditambahkan.');
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

    public function auth(Request $req){
        $egi = $req->only('email','password');
        if(Auth::attempt($egi)){
            if (Auth::user()->role == 'admin') {
               return redirect('dashboard');
            }elseif(Auth::user()-> role == 'alumni'){
                return redirect('/');
            }else{

                return redirect()->back();
            }
        }

    }
    public function logout(){
        auth::logout();
        return redirect('login');
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
