<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view("index");
    }

    public function sobre() {
        $soma = 10 + 9;
        echo "Conteúdo dinâmico Sobre $soma";
    }

    public function contato() {
        echo "Conteúdo dinâmico Contato";
    }

    public function servicos() {
      echo "Conteúdo dinâmico Serviços";
    }

    public function servico(int $id) {
        $servicos = [
            1 => [
                'nome' => 'lavagem de roupa',
                'descricao' => 'descricao de teste 1'
            ],
            2 => [
                'nome' => 'lavagem de coberta',
                'descricao' => 'descricao de teste 2'
            ],
            3 => [
                'nome' => 'lavagem de panelas',
                'descricao' => 'descricao de teste 3'
            ]
        ];

        return view('servico', [
            'servico' => $servicos[$id]
        ]); 
    }
}
