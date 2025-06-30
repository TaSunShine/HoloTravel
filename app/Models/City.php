<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Economy;
class City extends Model
{
    protected $table = 'cities';

    protected $casts = [
      'economy' => Economy::class,
    ];
    protected $fillable = [
        'name',
        'king',
        'population',
        'safety',
        'economy',
        'description',
    ];
    
}
