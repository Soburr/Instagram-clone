<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot() {
        parent::boot();

        static::created(function ($user) {
            $user->dashboard()->create([
                'title' => $user->username,
            ]);
        });
    }

    public function posts () {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    public function dashboard() {
        return $this->hasOne(Dashboard::class);
    }
}
