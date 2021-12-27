<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraphicCard extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_gc';
    protected $table ='graphic_cards';
    public function grapic_cardLaptops(){
        return $this->hasMany(Laptop::class,'id_gc');
    }
    protected $fillable = ['name'];
    public $timestamps=false;
}
