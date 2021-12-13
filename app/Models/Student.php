<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @method static latest()
 */
class Student extends Model
{
    use HasFactory;
    use Notifiable,
        SoftDeletes;
    protected $table = 'students';


    function borrow(){
        return $this->belongsTo(Borrow::class);
    }

}
