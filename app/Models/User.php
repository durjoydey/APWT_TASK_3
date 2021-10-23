<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    public $timestamps = false;
    //using hasmany verb one to many
    public function details(){
        return $this->hasMany(Detail::class,'userId');
    }

    //using eloquent
    public function assignedDetails(){
        return Detail::where('userId', $this->id)->get();
    }
}