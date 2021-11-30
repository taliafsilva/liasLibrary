<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'descricao',
        'img',
        'url',
    ];

    /**
     * The users that belong to the book.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
