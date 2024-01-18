<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\WebhookMercadoPagoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ProdutoController::class, "index"]);

Route::prefix('venda')->group(function () {
    Route::get('retorno/back-url', [VendaController::class, 'retornoBackUrl'])->name('retorno.sucesso');

    Route::post("finalizar-venda", [VendaController::class, "finalizarVenda"]);
});

Route::post('webhook/endpoint', [WebhookMercadoPagoController::class, 'handlePreferenceWebhook']);