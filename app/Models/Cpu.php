<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cpu';
    protected $table ='cpus';
    public function cpusLaptops(){
        return $this->hasMany(Laptop::class,'id_cpu');
    }
    protected $fillable = ['name', 'countCores', 'frequency'];

    public $timestamps=false;
}
