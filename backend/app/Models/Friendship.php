<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;

    protected $table = 'friendships';

    protected $fillable = [
        'from_id',
        'to_id',
        'status'
    ];

    public function from(){
        return $this->belongsTo(User::class, 'from_id');
    }

    public function to(){
        return $this->belongsTo(User::class, 'to_id');
    }

}
