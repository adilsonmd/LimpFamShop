@extends('layout')

@section('title', 'Produto')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-12 float-left border">
            <img class="img-fluid" src="http://braslimpo.com.br/wp-content/uploads/2016/06/116910-300x300.jpg" alt="imagem {{ $product->name }}">
        </div>
        <div class="col-md-8 col-sm-12 border">
            <h4>{{ $product->name }}</h4>
            <hr/>
            <div class="border border-warning w-25 py-2">
                <h5 class="text-danger">R${{ $product->value }}</h5>
            </div>

            <form class="form" action="add_to_cart/{{ $product->id }}" method="POST">
                <div>
                    <select class="" name="product-quantity">
                        <option select value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                    </select>
                    <input type="hidden" name="product-price" value="{{ $product->value }}" />
                    <button type="submit" class="btn btn-warning float-right">Adicionar ao carrinho</button>
                </div>
            </form>
            <hr/>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore similique eveniet,
               itaque soluta aliquam fugit natus consequatur sunt corporis quibusdam quas eius
               laborum porro quos reiciendis magni. Labore, repellendus. Nemo.</p>
        </div>
    </div>
@endsection