<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class ClientController extends Controller
{
    /**
     * 显示所有客户的列表
     */

    public function index(){
        $clients=Company::with(['contacts','category'])->get();
        // return  $coms;
        return view('client.index',['clients'=>$clients]);
    }

    public function edit($id){
        $com=Company::with(['contacts','category'])->find($id)->firstOrFail();
        return view('company.edit',['com'=>$com]);
    }
}
