<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProdutoInterface;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private ProdutoInterface $produtoRepository;

    public function __construct(ProdutoInterface $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function index(){
        $produtos = $this->produtoRepository->getAll();

        return view('produtos', compact('produtos'));
    }
}
