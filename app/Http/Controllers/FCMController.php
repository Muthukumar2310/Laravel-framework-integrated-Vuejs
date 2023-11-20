<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class FCMController extends Controller
{
    public function index(Request $request){
        $input = $req->all();
       
        return response()->json($input);
    }
     
}
