<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'commenter_id',
        'post_id',
        'parent_comment_id'
    ];

    public function post(){
        return $this->belongsTo( Post::class);
    }

}
