<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function adminLogin(){
        return view('admin.login');
    }
}
