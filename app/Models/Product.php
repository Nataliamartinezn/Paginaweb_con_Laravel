<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        
        'Name','Description','Price','Status'
    ];

    public function categorias()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
}
