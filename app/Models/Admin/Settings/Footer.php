<?php

namespace App\Models\Admin\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = ['upLabel', 'wigetLabel_1','wigetLabel_2','wigetLabel_3','rssLabel','socialLabel','supportLabel','phoneLabel','addressLabel','emailLabel','aboutheadLabel','aboutbodyLabel','copyright'];
}
