<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model {
    protected $fillable = ['producto_id', 'cliente_id', 'fecha', 'hora', 'unidades'];

    public function producto() {
        return $this->belongsTo(Producto::class);
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
