<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'review_id';
    protected $fillable = ['name', 'score', 'body', 'fruit_id'];

    public function fruit() {
        return $this->belongsTo(Fruit::class, 'fruit_id', 'fruit_id');
    }
}
