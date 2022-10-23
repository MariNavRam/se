<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nombre', 'ruta', 'ave_id']

    
    
    public function file{
        return $this->hasMany(File::class)
    }
    public function imagen()
    {
        return $this->hasMany(Ave::class);
    }
}
