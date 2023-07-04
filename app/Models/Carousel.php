<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $table = "carousels";

    protected $primaryKey = 'id_carousel';
 
    protected $guarded = [];

    protected $appends = ['thumbnail_image'];


    public function getThumbnailImageAttribute(){
        $separator = '/upload/';
        $exp = explode($separator, $this->attributes['image_url']);
        return $exp[0] . '/upload/q_5/' . $exp[1];
    }
}
