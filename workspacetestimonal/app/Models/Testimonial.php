<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'author_name',
        'author_designation',
        'author_website',
        'author_image',
        'confirmed',
        'author_id',
        'admin_id',
    ];

    public function author(){

        return $this->belongsTo(Author::class);
    }
}
