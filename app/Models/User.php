<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\TestUser;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'registered_date',
        'full_name',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class)
                ->withPivot('score', 'highest_score', 'passed')
                ->withTimestamps();
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class, 'video_user', 'user_id','video_id')
                ->withPivot('watched')
                ->withTimestamps();
    }
}
