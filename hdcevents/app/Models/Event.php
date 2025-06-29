<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['dates'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    protected $guarded = [];
}
