<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sender;

class SenderController extends Controller
{
    //
    public function index(){
        return Sender::all();
    }
}
