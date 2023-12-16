<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DaftarLokerController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\UploadDocumentController;
use App\Http\Controllers\UploadLokerController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('login',[userController::class,'index'])->name('admin.login');
Route::get('register',[userController::class,'create']);
Route::post('auth',[userController::class,'auth']);
Route::get('addprofile',[userController::class,'addprofile']);
Route::post('create',[userController::class,'store']);
Route::get('register', function () {
    return view('adminPage.register');
});



Route::middleware('auth')->group(function () {
    Route::get('addProfile', function () {
        return view('adminPage.addProfile');
    });
});

Route::get('dataPengaju', function () {
    return view('adminPage.datapengaju');
});

Route::get('dashboard',[UploadLokerController::class,'showInDashboard'])->name('dashboard');

// Home
Route::get('/',[HomeController::class,'index']);
// Features
Route::get('features',[FeaturesController::class,'index'])->name('features');
// UploadLoker
Route::get('upload',[UploadLokerController::class,'index'])->name('uploadLoker')->middleware('auth');
Route::post('upload',[UploadLokerController::class,'create'])->name('postLoker');
Route::get('/editLoker/{id}',[UploadLokerController::class,'edit'])->name('editLoker');
Route::post('/updateLoker/{id}',[UploadLokerController::class,'update']);
// Upload Dokumen
Route::get('/show',[UploadDocumentController::class,'showInDashboard'])->name('show');
Route::get('/uploadDocument',[UploadDocumentController::class,'index'])->name('uploadDocument')->middleware('auth');
Route::post('/uploadDocument',[UploadDocumentController::class,'store'])->name('postDocument');

// Loker
Route::get('loker',[HomeController::class,'showLoker'])->name('loker');

// DaftarLoker
Route::get('/daftarLoker/{id}',[DaftarLokerController::class,'index']);
Route::post('/daftarLoker',[DaftarLokerController::class,'create'])->name('daftarLoker');
Route::get('/dataPengaju',[DaftarLokerController::class,'show'])->name('dataPengaju');

// Contact
Route::get('/contact',[ContactController::class,'index'])->name('contact');

// Logout
Route::get('/logout',[UserController::class,'logout'])->name('logout');

// SendMail
Route::get('sendMail',function (){
Mail::to('egiazwulfikri@gmail.com')
-> send(new SendMail);
});