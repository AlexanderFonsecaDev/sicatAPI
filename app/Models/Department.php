<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'region_id' => 'integer',
    ];


    public function cities()
    {
        return $this->hasMany(\App\Models\City::class);
    }

    public function region()
    {
        return $this->belongsTo(\App\Models\Region::class);
    }
}
