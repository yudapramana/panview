<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $primaryKey = 'id_product';
 
    protected $guarded = [];

    public function service(){
        return $this->belongsTo(Services::class, 'id_service', 'id_service');
    }
}
