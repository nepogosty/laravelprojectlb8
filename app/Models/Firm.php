<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;
class Firm extends Model
{
    protected $primaryKey = 'id_firm';
    protected $table ='firms';
    use HasFactory;
    public function laptops(){
        return $this->hasMany(Laptop::class,'id_firm');

    }
    public $timestamps=false;
    protected $fillable = ['name', 'description'];


}
