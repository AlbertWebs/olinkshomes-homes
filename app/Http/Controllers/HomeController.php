<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function homes(){
        $Homes = Home::all();
        return view('front.homes', compact('Homes'));
    }

    public function home($slung){
        $Home = DB::table('homes')->where('slung',$slung)->get();
        return view('front.home',compact('Home'));
    }


}
