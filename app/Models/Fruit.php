<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    protected $primaryKey = 'fruit_id';
    protected $fillable = ['fruit_name', 'price', 'weight', 'image_path'];

    public function reviews() {
        return $this->hasMany(Review::class, 'fruit_id', 'fruit_id');
    }
}
