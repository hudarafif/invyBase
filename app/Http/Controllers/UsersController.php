<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function Dashboard(){
        if(auth::check() && auth::user()->type == 'admin'){
            return view('admin.dashboard');
        }else if
            (auth::check() && auth::user()->type == 'user'){
                return view('dashboard');
        }else{
            return redirect('/');
        }
    }
}
