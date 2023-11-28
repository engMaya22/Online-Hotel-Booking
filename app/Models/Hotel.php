<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
       'description',
       'contact_info',
    ];
    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
