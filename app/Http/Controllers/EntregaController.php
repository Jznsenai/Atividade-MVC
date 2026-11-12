<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregaController extends Controller {
    public function index()
    {
        $sistema = 'LogisExpress';
        $mensagem = 'Organizando entregas com eficiência.';
        return view('Entrega', compact('sistema', 'mensagem'));
    }

    public function sobre()
    {
        $sistema = 'LogisExpress';
        $mensagem = 'Organizando entregas com eficiência.';
        return view('Entrega.sobre', [
            'sistema' => $sistema,
            'mensagem' => $mensagem
        ]);
    }
}