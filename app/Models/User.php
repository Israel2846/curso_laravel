<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Video;

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

    protected function name(): Attribute
    {
        return new Attribute(
            /* get: function ($value) {
                return ucwords($value);
            }, */

            /* set: function ($value) {
                return strtolower($value);
            } */

            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }

    /* Antiguo metodo */
    // public function getNameAttribute($value)
    // {
    //     return ucwords($value);
    // }

    // public function setNamesAttribute($value)
    // {
    //     $this->attributes['name'] = strtolower($value);
    // }

    // Relación 1 a 1
    public function profile()
    {
        // $profile = Profile::where('user_id', $this->id)->first();

        // return $profile;
        // return $this->hasOne(Profile::class, 'user_id', 'user_id'); /* 2do parametro es el id de la tabla referencia, el tercero es de la table que lo llama */

        return $this->hasOne(Profile::class);
    }

    /* Relación 1 a muchos */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
