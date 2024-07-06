<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }


    public function colaboradors(){
        return $this->belongsToMany(Colaborador::class);
    }

}
