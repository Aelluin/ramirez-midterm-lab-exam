<?php

namespace App\Models;
use App\Models\User;
use App\Models\post_comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    public function User() {
        return $this->hasMany(User::class, 'post_id');
    }
    public function post_comments() {
        return $this->hasMany(post_comments::class, 'comments_id');
    }
}
