<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    /**
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'rating_overall' => 'float',
        'rating_connection' => 'float',
        'rating_stability' => 'float',
        'rating_speed' => 'float',
        'rating_service' => 'float',
    ];

}
