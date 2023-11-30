<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promoteur extends Model
{
    protected $fillable = ['nom', 'contact', 'logo', 'email'];

    public function biens()
    {
        return $this->hasMany(Bien::class);
    }
}
