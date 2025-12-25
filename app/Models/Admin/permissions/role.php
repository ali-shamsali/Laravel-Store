<?php

namespace App\Models\admin\permissions;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class role extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title','desc'];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
