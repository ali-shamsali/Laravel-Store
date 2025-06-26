<?php

namespace App\Models\home;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'type', 'code', 'exp_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
