<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'wifi',
        'garage',
        'pool',
        'reception',
        'sauna',
        'seaView',
    ];
    public function apartment(){
        return $this -> belongsTo(Apartment::class);
    }
}
