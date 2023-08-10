<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $lastname
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $active
 * @property $remember_token
 * @property $role_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Enterprise[] $enterprises
 * @property Inspection[] $inspections
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    static $rules = [
		'name' => 'required',
		'lastname' => 'required',
		'email' => 'required',
		'password' => 'required',
		'active' => 'required',
		'role_id' => 'required',
    ];

    static $rules_edit = [
		'name' => 'required',
		'lastname' => 'required',
		'email' => 'required',
		'active' => 'required',
		'role_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lastname','email','password','active','role_id'];

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


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enterprises()
    {
        return $this->hasMany('App\Models\Enterprise', 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inspections()
    {
        return $this->hasMany('App\Models\Inspection', 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }
    

}
