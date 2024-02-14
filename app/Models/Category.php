<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class Category extends Model
{
    protected $fillable = [
        'name',
        'logo',
    ];

    public $timpstamps = false;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
