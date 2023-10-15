<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    public function trainerView()
    {
        return view('admin.trainer');
    }
}
