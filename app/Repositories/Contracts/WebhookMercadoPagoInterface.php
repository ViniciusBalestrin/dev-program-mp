<?php

namespace App\Repositories\Contracts;

interface WebhookMercadoPagoInterface{
    public function handlePreferenceWebhook($data);
}