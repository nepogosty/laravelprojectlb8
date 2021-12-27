<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_reviews';
    protected $table ='reviews';

    public function laptops(){
        return $this->belongsTo(Laptop::class, 'id_gc');
    }
    protected $fillable = ['rating', 'review', 'id_laptop'];
    public $timestamps=false;
}
