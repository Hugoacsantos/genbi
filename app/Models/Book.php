<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author_id'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'orders');
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
