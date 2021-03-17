<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class aboutcontroller extends Controller
{
    function showAbout(Request $req)
    {

      $result=DB::table('students')->insert($req->only(['name','class','roll','birth_date']));

        if($result== true){
            return "Sucess";
        }else{
            return "fail";
        }
    }
}
