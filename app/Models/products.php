<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'img_path',
        'name',
        'antagonists',
        'id_category',
        'price',
        'quantity',
    ];

    use HasFactory;
}
