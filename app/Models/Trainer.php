<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainerName',
        'age',
        'phoneNumber',
        'pay',
    ];

    public function member()
    {
        return $this->hasMany(Member::class, 'trainer_id');
    }
}
