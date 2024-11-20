<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enseig extends Model
{
    use HasFactory;

    protected $table = 'enseignants';

    protected $fillable = [
        'code','nom','prenom','email','adresse'
    ];
}
