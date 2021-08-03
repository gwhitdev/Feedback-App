<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $fillable = [
        'alias',
        'user_id',
        'removed',
        'disabled'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
