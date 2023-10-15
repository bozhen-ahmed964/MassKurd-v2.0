<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addMemberController extends Controller
{
    public function addMemberView(){
        return view('admin.addMember');
    }
}
