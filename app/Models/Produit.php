<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';

    protected $fillable = [
        'nom',
        'description',
        'quantite',
        'categorie_id',
        'codebarre_id',
        'qrcode_id'
    ];
}
