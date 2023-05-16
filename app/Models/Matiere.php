<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cour;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable=['Nom'];
    public function cours(){
        return $this->hasMany(Cour::class);
    }

}
