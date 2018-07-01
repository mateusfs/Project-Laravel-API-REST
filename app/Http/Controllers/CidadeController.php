<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;

class CidadeController extends Controller
{
    public function index ($estado_id){
        return Cidade::where('uf_cod', $estado_id)->orderBy('cidade_nome')->get();
    }
}