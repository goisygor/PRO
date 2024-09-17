@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/img0.png" class="img-fluid" alt="{{ $produto->nome }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $produto->nome }}</h2>
                <p>{{ $produto->descricao }}</p>
                <p>Preço: R$ {{ $produto->preco }}</p>


                <form method="POST" action="{{ route('carrinho.add', $produto->id) }}">
                    @csrf
                    <label for="quantidade">Selecione a quantidade</label>
                    <input type="number" class="" name="quantidade" id=""></input>
                    <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    
@endsection