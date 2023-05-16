<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cour;
use App\Models\Etudiant;

class Prof extends Model
{
    use HasFactory;
    protected $fillable=['fullName','email','Telephone','Matiere_id'];
    public function cours(){
        return $this->hasMany(Cour::class);
    }
    public function studiants(){
        return $this->hasMany(Etudiant::class);
    }
}

