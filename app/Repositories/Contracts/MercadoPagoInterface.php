<?php

namespace App\Repositories\Contracts;

interface MercadoPagoInterface{
    public function criarPreferencia($data);
}