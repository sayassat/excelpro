<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TestUser;

class Test extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tests';
    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'test_user')
                ->using(TestUser::class)
                ->withPivot('score')
                ->withTimestamps();
    }
}
