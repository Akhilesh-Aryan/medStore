<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
class Home extends Controller
{
    public function homepage(){
        return view('home',["data"=>Store::all()]);
    }
    public function insert(Request $req){
        //yahn par humlog form ko validate kar rhe honge
        $req->validate([
            'name'=>'required',
            'logo'=>'required',
            'mrp'=>'required',
            'price'=>'required',
            'desc'=>'required|min:5',
            'mfg'=>'required|date',
            'expiry'=>'required|date',
        ]);
        //niche k code k madhiyam se hum data ko database me bhej rhe hai
        Store::create([
            'name'=>$req->name,
            'logo'=>$req->logo,
            'mrp'=>$req->mrp,
            'price'=>$req->price,
            'desc'=>$req->desc,
            'mfg'=>$req->mfg,
            'expiry'=>$req->expiry,

        ]);
         return redirect()->back();
    }
  
}
