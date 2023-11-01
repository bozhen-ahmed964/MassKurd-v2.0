<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'phneNumber',
        'age',
        'weight',
        'height',
        'gender',
        'game_type',
        'pay',
        'coursePay'
    ];


    public function trainer(){
      return  $this->belongsTo(Trainer::class,'trainer_id');
    }


}
