<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'title',
        'images',
        'description',
        'mase_horaire',
        'specialite',
        'bestseller'	
    ];

    protected $table = 'cours';
    public function objectifs()
    {
        return $this->hasMany(objectifsModel::class, 'coursid', 'numero');
    }
}
