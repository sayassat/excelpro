<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoUser extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'video_user';
    protected $fillable = ['video_id', 'user_id', 'watched'];
}
