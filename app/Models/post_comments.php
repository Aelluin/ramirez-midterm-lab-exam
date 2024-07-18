<?php

namespace App\Models;
use App\Models\comment_replies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_comments extends Model
{
    use HasFactory;

    public function comment_replies() {
        return $this->hasMany(comment_replies::class, 'pcomment-id');
    }
}
