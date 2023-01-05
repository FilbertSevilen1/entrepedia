<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'title',
        'details',
        'author_id',
        'imgurl',
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
