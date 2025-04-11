<?php

namespace App\Models\admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'ip' , 'actionType' , 'desc'];

    public function user(){
       return $this->belongsTo(User::class);
    }
}
