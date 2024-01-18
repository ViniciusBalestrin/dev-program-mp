<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\WebhookMercadoPagoInterface;
use Illuminate\Http\Request;

class WebhookMercadoPagoController extends Controller
{
    private WebhookMercadoPagoInterface $webhookMercadoPagoRepository;

    public function __construct(WebhookMercadoPagoInterface $webhookMercadoPagoRepository) {
        $this->webhookMercadoPagoRepository = $webhookMercadoPagoRepository;
    }

    public function handlePreferenceWebhook(Request $request){
        $this->webhookMercadoPagoRepository->handlePreferenceWebhook($request);

        return response()->json(["message" => "success"], 200);
    }

}
