<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller {

    public function index (Request $request) {
        $series = Serie::all();

        return view('series.index', compact('series'));
    }

    public function create() {

        return view('series.create');
    }

    public function store(Request $request){

        $nome = $request->nome;
        $serie = Serie::create([
            'nome' => $nome
        ]);

        echo "Série com id {$serie->id} criada: {$serie->nome}";
    }
}   
