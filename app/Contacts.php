<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'subject', 'category', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
