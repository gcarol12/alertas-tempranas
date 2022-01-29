<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;    

    protected $fillable = ['name', 'regional_id'];

    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }
}
