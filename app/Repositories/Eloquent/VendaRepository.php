<?php

namespace App\Repositories\Eloquent;

use App\Http\Resources\VendaTransacaoResource;
use App\Models\Venda;
use App\Repositories\Contracts\MercadoPagoInterface;
use App\Repositories\Contracts\VendaInterface;

class VendaRepository implements VendaInterface 
{    
    private MercadoPagoInterface $mercadoPagoRepository;

    public function __construct(MercadoPagoInterface $mercadoPagoRepository) {
        $this->mercadoPagoRepository = $mercadoPagoRepository;
    }
    
    public function getAll(){
        return Venda::all();
    }

    public function getById($vendaId){
        return Venda::findOrFail($vendaId);
    }

    public function finalizarVenda($data){
        $responseVenda = $this->mercadoPagoRepository->criarPreferencia($data);
        if(!$responseVenda){
            return response()->json(['status' => 'error', 'message' => 'Transação não encontrada'], 404);
        }
        
        return response()->json(new VendaTransacaoResource($responseVenda));
    }

    public function retornoBackUrl($data){
        switch($data["collection_status"]){
            case 'approved':
                return response()->json(
                    [
                        "status" => "success",
                        "message" => "Pagamento aprovado",
                        "data" => [
                            "payment_id" => $data["payment_id"],
                            "preference_id" => $data["preference_id"]
                        ]
                    ], 200);
            case 'in_process':
                return response()->json(["status" => "in_process", "message" => "Pagamento pendente"], 202);
            case 'rejected':
                return response()->json(["status" => "rejected", "message" => "Falha no pagamento"], 422);
        }
    }
}