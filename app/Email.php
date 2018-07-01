<?php

namespace App;

use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;

class Email extends Eloquent  {

    protected $table = "fila";
    protected $primaryKey = "codigo";
    public $timestamps = false;
    
    protected $fillable = [
        'destinatario',
        'nome',
        'remetente',
        'titulo',
        'texto',
        'arquivo',
        'data',
        'extensao',
        'prioridade',
        'status'
    ];
    protected $hidden = [
        'codigo',
    ];

}
