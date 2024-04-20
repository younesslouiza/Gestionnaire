<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonCommande extends Model
{
    use HasFactory;
    protected $fillable = [
        'bon_commandes',
        'quantit_cmd',
        'prix_total',
        'id_produit',
        'total_tva',
        'total_ttc'
    ];
}
