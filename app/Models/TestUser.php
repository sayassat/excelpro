<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestUser extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'test_user';
    protected $fillable = ['test_id', 'user_id', 'score'];
}
