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
    ];

    public function post()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public static function rules($operation) 
    {   
        $rules = [];

        switch ($operation) {
            case 'create':
                $rules = [
                    'name' => 'required',
                    'password' => 'required',
                    'email' => 'required|email|unique:users'
                ];
                break;
                // add rules for other operations such as 'update', 'delete' if necessary
            default:
                $rules = [];
                break;
        }

        return $rules;
    }
}
