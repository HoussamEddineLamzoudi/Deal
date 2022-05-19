<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'prix',
        'file',
        'type',
    ];

    public function user (){
        return $this->belongsTo(user::class);
    }
}
