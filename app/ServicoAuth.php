<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicoAuth extends Model {

    protected $table = 'api_servicos_auth';
    public $timestamps = false;
    protected $fillable = ['api_servico_origem', 'api_servico_destino'];

    
}
