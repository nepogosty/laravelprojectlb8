<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraphicCard extends Model
{
    use HasFactory;
    public function grapic_cardLaptops(){
        return $this->hasMany('App\Models\Laptop','id_firm');
    }
}
