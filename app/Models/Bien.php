<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $fillable = ['nom', 'localisation', 'prix', 'surfaces', 'nbr_piece'];

    public function promoteur()
    {
        return $this->belongsTo(Promoteur::class);
    }

    public function typeBien()
    {
        return $this->belongsTo(TypeBien::class);
    }
}
