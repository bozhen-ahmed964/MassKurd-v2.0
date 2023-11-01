<?php

namespace App\Http\Controllers\admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trainer;

class addMemberController extends Controller
{


    public function addMemberView()
    {
        $trainers = Trainer::all();
        return view('admin.addMember', ['trainers' => $trainers]);
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
        $member->trainer_id = $request->trainer_id;
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


    public function showUpdateForm($id)
    {

        $memberData = Member::find($id);
        $trainers = Trainer::all();
        return view('admin.updateMember', ['memberData' => $memberData, 'trainers' => $trainers]);
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
        $member->trainer_id = $request->trainer_id;
        $member->coursePay = $request->coursePay;
        $member->updated_at = $request->end_date;
        $member->update();
        return redirect()->back();
    }
}
