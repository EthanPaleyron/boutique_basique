<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class Article extends Model
{
    protected $fillable = [
        'name',
        'file',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function commands_line()
    {
        return $this->belongsTo(Command::class);
    }
}
