<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    protected $fillable = ['nom'];

    public function biens()
    {
        return $this->hasMany(Bien::class);
    }
}
