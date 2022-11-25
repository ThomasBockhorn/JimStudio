<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Painting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'size',
        'medium',
        'location',
        'frame_status',
        'status',
        'notes',
        'category',
        'image'
    ];

}
