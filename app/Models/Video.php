<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\VideoUser;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'videos';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'video_user', 'user_id','video_id')
                ->withPivot('watched')
                ->withTimestamps();
    }
}
