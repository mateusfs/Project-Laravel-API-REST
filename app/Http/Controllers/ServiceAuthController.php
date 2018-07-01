<?php

namespace App\Http\Controllers;

use \App\ServicoAuth;

class ServiceAuthController {

    public function auth(Request $request) {
        
        $request->key_origem;
        $request->key_destino;
        
        ServicoAuth::where('key_auth', $request->key_auth)->where('service', $request->service);
        
    }

}
