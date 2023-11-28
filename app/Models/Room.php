<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'description',
        'cover_image',
        'number_of_beds',
        'number_of_baths',
    ];
    public function services(){
        return $this->hasMany(Service::class);
    }

}
