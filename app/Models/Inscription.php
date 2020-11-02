<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
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
        'state_id' => 'integer',
        'typedocument_id' => 'integer',
        'district_id' => 'integer',
        'gender_id' => 'integer',
        'codevalidation_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birthday',
    ];


    public function state()
    {
        return $this->belongsTo(\App\Models\State::class);
    }

    public function typedocument()
    {
        return $this->belongsTo(\App\Models\Typedocument::class);
    }

    public function district()
    {
        return $this->belongsTo(\App\Models\District::class);
    }

    public function gender()
    {
        return $this->belongsTo(\App\Models\Gender::class);
    }

    public function codevalidation()
    {
        return $this->belongsTo(\App\Models\Codevalidation::class);
    }
}
