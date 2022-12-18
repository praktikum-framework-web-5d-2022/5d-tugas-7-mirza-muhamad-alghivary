<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'nama', 'umur'
    ];

    public function barangs(){
        return $this->belongsToMany('App\Models\Barang')->withTimestamps();
    }
}
