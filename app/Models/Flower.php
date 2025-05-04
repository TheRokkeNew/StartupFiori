<?php

//Definisce la struttura del modello Flower (fiore) nel database
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Flower extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'color', 'season', 'type', 'description', 'care_sun', 'care_water', 'care_soil'];
}
