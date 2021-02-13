<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'experience_level_id',
        'job_type_id',
        'client_id',
        'agency_id',
        'email_verified_at',
		'asana_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
}
