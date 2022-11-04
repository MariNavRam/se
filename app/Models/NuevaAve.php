<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuevaAve extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'foto', 'size'];
}
