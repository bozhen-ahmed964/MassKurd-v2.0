<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    public function trainerView()
    {
        $trainer = Trainer::all();
        return view('admin.trainer', compact('trainer'));
    }


    public function addTrainer(Request $request)
    {
        $trainerData = new Trainer();
        $trainerData->trainerName = $request->trainerName;
        $trainerData->age = $request->age;
        $trainerData->phoneNumber = $request->phoneNumber;
        $trainerData->pay = $request->pay;
        $trainerData->save();
        return redirect()->back();
    }
}
