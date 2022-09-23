<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class UserController extends Controller
{
    public static function Api(Request $request){
         Info::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'ip'=>$request->ip()
        ]);
        return view('welcome');
        
    }

    public static function Getapi(Request $request){
        return $request->all();
    }
    public static function Getid(Request $request){
        return Info::where('id',$request->id)->get();
    }
}
