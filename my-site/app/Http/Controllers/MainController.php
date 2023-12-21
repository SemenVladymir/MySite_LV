<?php

namespace App\Http\Controllers;

use App\Models\ObjectOfTrade;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home', ['ispage'=>false, 'entered'=>false]);
    }

    public function about(){
        return view('about', ['ispage'=>false, 'entered'=>false]);
    }

    public function registration(){
        return view('registration', ['ispage'=>false, 'entered'=>false]);
    }

    public function registration_input(Request $request){
        $valid = $request->validate([
            ''
        ]);
        return view('registration', ['ispage'=>false, 'entered'=>false]);
    }

    public function index(){
        $ObjectOfTrades = objectoftrade::all();
        return view('index', ['myobjects'=>$ObjectOfTrades, 'ispage'=>true, 'entered'=>false]);
    }

    public function page(Request $request){
        $id = $request->input('id');
        $myobjects = objectoftrade::all();
        return view ('page', ['data'=>$myobjects->where('id', $id)->first(), 'ispage'=>false, 'entered'=>false]);
//        dd($myobjects->where('id', $id));
    }

    public function input(Request $request)
    {

    }
}
