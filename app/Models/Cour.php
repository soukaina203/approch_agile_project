<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\Prof;

class Cour extends Model
{
    use HasFactory;
    protected $fillable=['titre','description','prof_id','Matiere_id'];
    public function matieres(){
        return $this->belongsTo(Matiere::class);
    }
    public function Profs(){
        return $this->belongsTo(Prof::class);
    }

}
