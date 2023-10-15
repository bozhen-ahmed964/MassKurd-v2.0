<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function courseView()
    {
        return view('admin.course');
    }
}
