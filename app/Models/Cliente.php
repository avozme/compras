<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    protected $fillable = ['nombre', 'apellido1', 'apellido2', 'domicilio', 'email'];

    public function productos() {
        return $this->belongsToMany(Producto::class, 'compras')
            ->withPivot('fecha', 'hora', 'unidades')
            ->withTimestamps();
    }
}
