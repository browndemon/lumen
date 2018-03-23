<?php
namespace App;

use Iluminate\Database\Eloquent\Model;

class Car extends Model{
    protected $fillable = ['make', 'model', 'year'];
}
