<?php

namespace App\Models\admin\permissions;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
