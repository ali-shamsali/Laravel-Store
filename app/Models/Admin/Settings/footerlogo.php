<?php

namespace App\Models\admin\settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footerlogo extends Model
{
    use HasFactory;
    protected $connection = "mysql_settings";
    protected $table = "footers-logo";
    protected $fillable = ['title', 'type' , 'isActive'];
}
