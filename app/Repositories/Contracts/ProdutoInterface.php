<?php

namespace App\Repositories\Contracts;

interface ProdutoInterface{
    public function getAll();
    public function getById($id);
}