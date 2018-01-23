<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'price'];
	public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}
