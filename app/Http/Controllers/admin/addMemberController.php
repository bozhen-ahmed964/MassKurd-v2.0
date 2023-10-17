<?php

namespace App\Http\Controllers\admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class addMemberController extends Controller
{


    public function addMemberView()
    {
        return view('admin.addMember');
    }


    public function storeMember(Request $request)
    {
        $member = new Member();
        $member->fullName = $request->input('fullName');
        $member->phoneNumber = $request->input('phoneNumber');
        $member->age = $request->input('age');
        $member->weight = $request->input('weight');
        $member->height = $request->input('height');
        $member->gender = $request->input('gender');
        $member->game_type = $request->input('game_type');
        $member->pay = $request->input('pay');
        $member->coursePay = $request->input('coursePay');
        $member->save();

        return redirect()->back();

    }
}
