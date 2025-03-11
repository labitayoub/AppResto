<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'user_id',
        'classe_id',
    ];

    public function classes()
    {
        return $this->belongsTo(Classe::class);
    }
}