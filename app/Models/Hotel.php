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
    protected $casts = [
        'contact_info' => 'array',
    ];
    public function rooms(){
        return $this->hasMany(Room::class);
    }
    public function services(){
        return $this->hasMany(Service::class);
    }
}
