<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Firm;
class Laptop extends Model
{
    protected $primaryKey = 'id';
    protected $table ='laptops';
    use HasFactory;
    public function laptopsReviews(){
        return $this->hasMany('App\Models\Reviews');
    }

    public function getGC(){
        return  GraphicCard::where('id_gc',$this->id_gc)->first();

    }
    public function gc(){
        return $this->belongsTo(GraphicCard::class);
    }
    public function firm()
    {
        return $this->belongsTo(Firm::class,'id_firm');
    }

    public function orders(){
        return $this->belongsToMany(Order::class,'laptop_order');
    }
    public function getPriceForCount(){
        if(!is_null($this->pivot))
        {
          return  $this->pivot->count*$this->price;
        }
       return price;
    }
}