<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = ['name', 'nivel'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'docentes';
}