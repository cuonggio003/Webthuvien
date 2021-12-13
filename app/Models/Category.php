<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static where(string $string, string $string1, string $string2)
 * @method static findOrFail($id)
 */
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    function books() {
        return $this->hasMany(Book::class);
    }

    function totalCategories(){
        return $this->books->count();
    }
}
