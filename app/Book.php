<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Книги
 */
class Book extends Model
{
  /**
   * Атрибуты, которые можно использовать массового заполнения.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'author','publication date','publishing','annotation','keyword','file',
  ];
}
