<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\MercadoPagoInterface;
use Illuminate\Support\Facades\Log;
use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Resources\MerchantOrder\Item;

class MercadoPagoRepository implements MercadoPagoInterface 
{    
    public function __construct() {
        MercadoPagoConfig::setAccessToken(config("mercadopago.acess_token"));
        MercadoPagoConfig::setIntegratorId(config("mercadopago.integrador_id"));
    }

    public function criarPreferencia($data){
        try{
            $client = new PreferenceClient();

            $preference = $client->create([
              "external_reference" => config("mercadopago.email"),
              "items"=> array(
                array(
                  "id" => "4567",
                  "title" => "Dummy Title",
                  "description" => "Dispositivo de loja de comércio eletrônico móvel",
                  "picture_url" => "http://www.myapp.com/myimage.jpg",
                  "category_id" => "eletronico",
                  "quantity" => 1,
                  "currency_id" => "BRL",
                  "unit_price" => 100
                )
              ),
              "payer" => [
                "name" => "Lalo",
                "surname" => "Landa",
                "phone" => [
                  "number" => "11 12345-6789"
                ],
                "email" => " test_user_33467020@testuser.com",
                "adress" => [
                  "street_name" => "Rua Falsa",
                  "street_number" => "123",
                  "zip_code" => "45830854"
                ]
              ],
              // "notification_url" => "mp.balestrin.dev.mp/webhook/preference",
              "back_urls" => [
                "success" => "mp.balestrin.dev.mp/venda/back-url",
                "pending" => "mp.balestrin.dev.mp/venda/back-url",
                "failure" => "mp.balestrin.dev.mp/venda/back-url",
              ],
              "auto_return" => "all",
              "payment_methods" => [
                "default_payment_method_id" => "master",
                "excluded_payment_methods" => array(
                    array(
                    "id" => "visa"
                    )
                ),
                "installments"  => 12,
                "default_installments" => 1
              ]
            ]);

            return $preference;
        }
        catch(MPApiException $ex){
          Log::info("Erro CriarPreferencia(): " . $ex->getApiResponse());
            return null;
        }
    }
}


