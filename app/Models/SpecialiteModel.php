<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialiteModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title'	
    ];

    protected $table = 'specialite';
}
