<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    public function MainCategory()
    {
       return $this->belongsTo('App\Models\MainCategory');
    }

}
