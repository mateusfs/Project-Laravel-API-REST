<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model {

    protected $table = 'api_servicos';
    public $timestamps = false;
    protected $fillable = ['nome', 'chave'];

    public function servicoAuth(){
        $this->hasMany('App\ServicoAuth');
    }
}
