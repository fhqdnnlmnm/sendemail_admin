<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmailTem;

class EmailTemController extends Controller
{
    //获取所有邮件模板
    public function index(){
        return EmailTem::all();
    }
}
