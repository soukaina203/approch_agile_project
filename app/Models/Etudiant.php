<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prof;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['fullName', 'email', 'Telephone', 'niveauEtude','password'];
    public function profs()
    {
        return $this->hasMany(Prof::class);
    }
}
