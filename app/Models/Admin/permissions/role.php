<?php

namespace App\Models\admin\permissions;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
