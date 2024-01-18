@extends('layouts.app')

@section('title', 'Produtos')

@section("content")        
    <div class="container">
        @foreach ($produtos as $produto)
            <div class="product-box">
                {{-- <img class="product-image" src="{{ asset('images/product1.jpg') }}" alt="Produto 1"> --}}
                <h3 class="product-title">{{$produto->titulo}}</h3>
                <p class="product-price">R${{$produto->preco_unitario}}</p>
                <button>Adicionar ao Carrinho</button>
            </div>
        @endforeach
    </div>

    <div id="wallet_container">
        <button id="pay-button">Pague a Compra</button>        
    </div>



    

    <div id="walletBrick_container"></div>

@endsection



