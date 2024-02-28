<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compilation extends Model
{

    protected $hidden = ['created_at', 'updated_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

}
