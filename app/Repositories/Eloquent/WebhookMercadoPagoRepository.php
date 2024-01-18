<?php

namespace App\Repositories\Eloquent;

use App\Models\Produto;
use App\Repositories\Contracts\WebhookMercadoPagoInterface;

class WebhookMercadoPagoRepository implements WebhookMercadoPagoInterface 
{    
    public function handlePreferenceWebhook($request){
        //
    }
}