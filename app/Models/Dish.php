<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name', 'restaurant', 'availableMeals'
    ];
    protected $primaryKey = 'id';
    protected $table = 'table_dish';
}
