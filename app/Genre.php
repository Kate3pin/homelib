<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Жанры книг
 */
class Genre extends Model
{
    /**
     * Атрибуты, которые можно использовать массового заполнения.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];
}
