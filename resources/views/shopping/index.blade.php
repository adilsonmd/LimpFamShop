@extends('layout')
@section('title', 'Produtos')
@section('content')
<div class="row">

<div class="col-md-9 col-sm-12">
       
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
    @foreach($productChunk as $product)
        <div class="card-body m-2 border">
            <h5 class="card-title product-name">{{ $product->name }}</h5>
            <h5 class="card-text text-info"><span class="product-price">R${{ $product->value }}</span></h5>
            <h5 class="card-text"><span class="product-unit">Unidade: {{ $product->unit }}</span></h5>
            
            <a href="shop/{{ $product->id }}" class="btn bg-warning">Mais detalhes</a>
        </div>
        
    @endforeach
    </div>
    @endforeach
        
</div> <!-- div.col-sm-10 -->

<div class="col-md-3 col-sm-12">

    <div class="card-body">
        <h5 class="card-title">Carrinho: <span class="text-info cart-value">R$0</span></h5>
        <button href="#" class="btn bg-warning">Fechar compra</button>
    </div>
    @if(isset($cart))
    <div>
        <ul class="list-group">
            <li class="list-group-item"></li>
        </ul>
    </div>
    @endif

</div>

</div> <!-- div.row -->

    @section('scripts')
    <script src="/js/list_product.js"></script>
    @endsection

@endsection
