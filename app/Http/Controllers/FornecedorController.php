<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[ 0 => ['Nome'=>'Bradock', 'Status'=>'N']];
        return view("app.fornecedor.index", compact("fornecedores"));
    }
}
