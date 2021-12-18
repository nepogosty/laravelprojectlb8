<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $table ='orders';
    use HasFactory;
    public function laptops()
    {
        return $this->belongsToMany(Laptop::class,'laptop_order','id_order','id_laptop')->withPivot('count')->withTimestamps();
    }
    public function fullPrice(){
        $sum=0;
        foreach ($this->laptops as $laptop) {
            $sum+=$laptop->getPriceForCount();
        }
        return $sum;
    }
    public function saveOrder($name, $phone,$email)
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->status = 1;
            $this->save();
            session()->forget('id_order');
            return true;
        }else{
            return false;
        }
    }

}
