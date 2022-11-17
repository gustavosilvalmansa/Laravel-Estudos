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
                'CNPJ'=>NULL,
                'DDD'=>'51',
                'TELEFONE'=>'9108-8462'
                ],
            1 => 
                [
                'Nome'=>'Ruga', 
                'Status'=>'S', 
                'CNPJ'=>'2',
                'DDD'=>'48',
                'TELEFONE'=>'9108-8462'
                ],   
            2 => 
                [
                'Nome'=>'Veronica', 
                'Status'=>'S', 
                'CNPJ'=>'2',
                'DDD'=>'11',
                'TELEFONE'=>'9108-8462'
                ]              
            
            ];
        return view("app.fornecedor.index", compact("fornecedores"));
    }
}
