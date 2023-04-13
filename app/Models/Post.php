<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
