<?php

namespace App\Models\admin\permissions;
use App\Models\admin\permissions\role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    protected $fillable = ['title','desc'];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function roles(){
        return $this->belongsToMany(role::class);
    }
}
