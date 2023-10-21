<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function adminDashboardShow(){
        $memberData = Member::paginate(10);
        return view('admin.dashboard' , compact('memberData'));
    }
}
