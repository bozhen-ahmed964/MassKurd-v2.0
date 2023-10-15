<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class billingController extends Controller
{
    public function billingView()
    {
        return view('admin.billing');
    }
}
