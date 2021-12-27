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
        return $this->hasMany(Reviews::class,'id_laptop');
    }

    public function getGC(){
        return  GraphicCard::where('id_gc',$this->id_gc)->first();

    }
    public function gc(){
        return $this->belongsTo(GraphicCard::class, 'id_gc');
    }
    public function firm()
    {
        return $this->belongsTo(Firm::class,'id_firm');
    }
    public function cpu(){
        return $this->belongsTo(Cpu::class, 'id_cpu');
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
    protected $fillable = ['name',
        'href',
        'price',
        'bonuses',
        'rating',
        'SSD',
        'RAM',
        'image',
        'code',
        'id_firm',
        'id_cpu',
        'id_gc'];
    public $timestamps=false;

}
