<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function typeofproduct(){
        return $this->belongsTo(Typeofproduct::class);
    }

    public function allergens(){
        return $this->belongsToMany(Allergen::class);
    }
}
