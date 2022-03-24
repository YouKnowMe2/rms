<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(){
        $users = User::all();
        return view('admin.users',[
            'users' => $users
        ]);
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();

    }
}
