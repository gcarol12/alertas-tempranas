<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutela extends Model
{
    use HasFactory;

    protected $fillable = [
        'radicado', 
        'name', 
        'user_id', 
        'fecha', 
        'NIT', 
        'email',
    ];

    public function proceso()
    {
        return $this->belongsTo(Proceso::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   

    
}


