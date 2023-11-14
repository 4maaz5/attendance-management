<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =['rollno','name','status'];

    // //Accessor:we can make smal letter words to capital
    // public function getNameAttribute($value){
    //     return ucFirst($value);
    //     // return 'Hello'.$value;
    // }
    public function getFullNameAttribute(){
        $var="03481951833";
        return $var;
    }
    // public function getNewAttribute(){
    //     //$var="03481951833";
    //     return $this->name .$this->status;
    // }
    //Mutator:we can add value while inserting data
    // public function setNameAttribute($value){
    //     $this->attributes['name'] = $value. 'Hello';
    // }
    // public function setNameAttribute($value){
    //     return $this->attributes['name'] = ucFirst($value);
    // }

}
