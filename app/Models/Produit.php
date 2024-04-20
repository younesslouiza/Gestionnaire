<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'prix_vente',
        'prix_achat',
        'image',
        'categorie_id'
    ];

    public function Categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }
}
