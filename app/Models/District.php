<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
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
        'city_id' => 'integer',
        'zone_id' => 'integer',
    ];


    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function zone()
    {
        return $this->belongsTo(\App\Models\Zone::class);
    }
}
