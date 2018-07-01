<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;

class PaisController extends Controller
{
    public function index (){
        return Pais::orderBy('pais_nome')->get();
    }
}
