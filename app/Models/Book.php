<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @method static where(string $string, string $string1, string $string2)
 * @method static findOrFail($id)
 * @method static latest()
 * @method static find($id)
 */
class Book extends Model
{
    use HasFactory;
    use Notifiable,
        SoftDeletes;

    protected $table = 'books';

    function category() {
        return $this->belongsTo(Category::class);
    }

    function borrow_details(){
        return $this->belongsToMany(BorrowDetails::class, 'borrow_details');
    }

    function borrow(){
        return $this->hasOne(Borrow::class, 'borrow_id');
    }
}

?>
