<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $fillabe = ['nom', 'pays_id'];

    public function departements() {
        return $this->hasMany(Departement::class);
    }

}
