<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    public function index ($pais_id){
        return Estado::where('pais_cod', $pais_id)->orderBy('uf_sig')->get();
    }
}
