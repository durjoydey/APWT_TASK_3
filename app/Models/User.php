<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class User extends Model
{
    use HasFactory;
 
    protected $table = 'user';
    public $timestapms= false;
    
    public function details(){
        return $this->hasMany(Detail::class, 'userId','id');
    }
  
    public function assignedDetails(){
        return Detail::where('id', $this->userId)->first();
    }

}