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
        $member->updated_at = $request->input('end_date');
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
        $member->fullName = $request->input('fullName');
        $member->phoneNumber = $request->input('phoneNumber');
        $member->age = $request->input('age');
        $member->weight = $request->input('weight');
        $member->height = $request->input('height');
        $member->gender = $request->input('gender');
        $member->game_type = $request->input('game_type');
        $member->pay = $request->input('pay');
        $member->coursePay = $request->input('coursePay');
        $member->updated_at = $request->input('end_date');
        $member->update();
        return redirect()->back();
    }
}
