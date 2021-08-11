<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    protected $fillable = [
        'user_id',
        'description',
        'image_url'
    ];
    public $appends = ['url', 'uploaded_time', 'size_in_kb'];
    
    public function getUploadedTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    /*
    public function getSizeInKbAttribute()
    {
        return round($this->size / 1024, 2);
    }
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}