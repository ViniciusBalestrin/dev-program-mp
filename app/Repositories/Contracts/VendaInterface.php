<?php

namespace App\Repositories\Contracts;

interface VendaInterface{
    public function getAll();
    public function getById($id);
    public function finalizarVenda($data);
    public function retornoBackUrl($data);
}