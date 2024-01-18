<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\VendaInterface;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    private VendaInterface $vendaRepository;

    public function __construct(VendaInterface $vendaRepository){
        $this->vendaRepository = $vendaRepository;
    }

    public function finalizarVenda(Request $request){
        return $this->vendaRepository->finalizarVenda($request->all());
    }

    public function retornoBackUrl(Request $request){
        return $this->vendaRepository->retornoBackUrl($request->all());
    }
}
