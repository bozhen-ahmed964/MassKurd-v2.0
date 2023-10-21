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
        $member->fullName = $request->fullName;
        $member->phoneNumber = $request->phoneNumber;
        $member->age = $request->age;
        $member->weight = $request->weight;
        $member->height = $request->height;
        $member->gender = $request->gender;
        $member->game_type = $request->game_type;
        $member->pay = $request->pay;
        $member->coursePay = $request->coursePay;
        $member->updated_at = $request->end_date;
        $member->save();

        return redirect()->back();
    }


    public function deleteMember($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/adminDashboard');
    }


    public function showUpdateForm($id){
        $memberData = Member::find($id);
        return view('admin.updateMember' , compact('memberData'));
    }

    public function updateMember(Request $request, $id)
    {
        $member = Member::find($id);
        $member->fullName = $request->fullName;
        $member->phoneNumber = $request->phoneNumber;
        $member->age = $request->age;
        $member->weight = $request->weight;
        $member->height = $request->height;
        $member->gender = $request->gender;
        $member->game_type = $request->game_type;
        $member->pay = $request->pay;
        $member->coursePay = $request->coursePay;
        $member->updated_at = $request->end_date;
        $member->update();
        return redirect()->back();
    }
}
