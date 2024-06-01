<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectifsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'coursid',
        'description'	
    ];

    protected $table = 'objectifs';
    public function cours()
    {
        return $this->belongsTo(CoursModel::class, 'coursid', 'numero');
    }
}
