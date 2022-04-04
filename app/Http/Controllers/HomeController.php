<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $foods = Food::all();
        $chef = Chef::all();
        return view('home',[
            'foods' => $foods,
            'chef' => $chef
        ]);
    }
    public function redirects(){
        $chef = Chef::all();
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){

            return view('admin.home');

        }else{
            $foods = Food::all();
            return view('home',[
                'foods' => $foods,
                'chef' => $chef
            ]);
        }
    }
}
