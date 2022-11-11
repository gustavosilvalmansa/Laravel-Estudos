<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[ 
            0 => 
                [
                'Nome'=>'Bradock', 
                'Status'=>'N', 
                'CNPJ'=>NULL
                ],
            1 => 
                [
                'Nome'=>'Ruga', 
                'Status'=>'S', 
                'CNPJ'=>'2'
                ]               
            
            ];
        return view("app.fornecedor.index", compact("fornecedores"));
    }
}
