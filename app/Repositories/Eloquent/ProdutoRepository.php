<?php

namespace App\Repositories\Eloquent;

use App\Models\Produto;
use App\Repositories\Contracts\ProdutoInterface;

class ProdutoRepository implements ProdutoInterface 
{    
    public function getAll(){
        return Produto::all();
    }

    public function getById($produtoId){
        return Produto::findOrFail($produtoId);
    }
}


