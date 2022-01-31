<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['numero'];

    public function temporadas(){

        return $this->belongsTo(Temporada::class);
    }
}
