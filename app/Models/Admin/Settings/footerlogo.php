<?php

namespace App\Models\admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class footerlogo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $connection = "mysql_settings";
    protected $table = "footers-logo";
    protected $fillable = ['title', 'type' , 'isActive'];
}
