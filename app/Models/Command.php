<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class Command extends Model
{
    protected $fillable = [
        'command_id',
        'article',
        'quantity',
        'price',
        'basket',
    ];

    public $timpstamps = false;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
