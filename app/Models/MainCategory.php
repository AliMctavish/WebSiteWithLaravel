<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;


    
    protected $fillable = ['parent_id', 'name'];


    public function children()
    {
      return $this->hasMany('App\MainCategory', 'parent_id');
    }

    public function posts()
    {
      return $this->hasMany('App\Models\posts');
    }

}
