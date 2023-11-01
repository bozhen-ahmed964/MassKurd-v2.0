<?php

namespace App\Http\Controllers\admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    public function showProfile($id)
    {
        $profileData = Member::with('trainer')->find($id);
        return view('admin.profile', compact('profileData'));
    }
}
