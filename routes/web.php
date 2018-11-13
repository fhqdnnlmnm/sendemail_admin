<?php

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

use Illuminate\Support\Facades\Mail;
use  App\Mail\PriceQuotation;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendemail',function(){
    Mail::to('merry@accessfba.com')->send(new PriceQuotation());
});

Route::get('/exp',function(){
    return Excel::download(new UserExport,'users.xlsx');
});


Route::get('/client','ClientController@index');