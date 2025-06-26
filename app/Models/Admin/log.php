<?php

namespace App\Models\admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class log extends Model
{
    use HasFactory;
    protected $connection = 'mysql_settings';
    protected $table = 'logs';
    protected $fillable = ['user_id', 'ip', 'actionType', 'desc'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function MakeLog($actionType, $desc, $userId = null)
    {
        return self::create([
            'user_id' => $userId ?? Auth::id(),
            'ip' => request()->ip(),
            'actionType' => $actionType,
            'desc' => $desc,
        ]);
    }
}
