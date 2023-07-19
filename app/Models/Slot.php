<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Slot extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $table = "slots";

    protected $primaryKey = 'id_slot';
 
    protected $guarded = [];

    public function slot() {
        return $this->hasOne(Item::class, 'id_item');
    }
}
