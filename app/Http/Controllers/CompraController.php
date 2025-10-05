<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller {
    public function index() {
        return response()->json(Compra::all(), 200);
    }

    public function store(Request $request) {
        $compra = Compra::create($request->all());
        return response()->json($compra, 201);
    }

    public function show($id) {
        return response()->json(Compra::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $compra = Compra::findOrFail($id);
        $compra->update($request->all());
        return response()->json($compra, 200);
    }

    public function destroy($id) {
        Compra::destroy($id);
        return response()->json(null, 204);
    }
}
