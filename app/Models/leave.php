<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    use HasFactory;
    public function getFnameAttribute($value){
        return ucFirst($value);
    }
    public function getReasonAttribute($value){
        return ucFirst($value);
    }
}
