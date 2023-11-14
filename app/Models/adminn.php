<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminn extends Model
{
    use HasFactory;
    public function getUsernameAttribute($value){
        return ucFirst($value);
    }
}
