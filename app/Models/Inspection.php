<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inspection
 *
 * @property $id
 * @property $enterprise
 * @property $description
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inspection extends Model
{
    
    static $rules = [
		'enterprise' => 'required',
		'description' => 'required',
		// 'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['enterprise','description','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
