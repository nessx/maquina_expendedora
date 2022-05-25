@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            @guest
            @if (Route::has('login'))
            <div class="alert alert-danger mt-3" role="alert">
                Aún no has iniciado sesión, no puedes ver el area de productos :(
            </div>
            <a href="{{ url('/login') }}" class="btn btn-primary m-3">Iniciar sesión</a>
            @endif

            @else
            <div class="card-header">{{ __('Productos') }}</div>
            @endguest
        </div>
    </div>
</div>
@guest
@if (Route::has('login'))
@endif
@else
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="grid-products justify-content-center">

        @foreach($products as $product)
        <div class="item-grid-products">

            <a href="{{url('/detail/'.$product->id)}}">
                <img src="{{ asset('images/'.$product->imagen_producto)}}" alt="producto" class="img-product">
            </a>
            <div class="flex-description">
                <div class="product-description-txt"> <p>{{$product->nombre_producto}} </p></div>
                <div class="product-precio-txt"> <p>{{$product->precio_producto}}€ </p></div>
                 
            </div>
        </div>
        @endforeach
    </div>
</div>
@endguest

<style>
    .product-precio-txt{
        font-size: 40px;
        margin-right: 25px;
        color: red;
    }
    .product-description-txt{
        font-size: 30px;
        margin-left: 25px;
    }
    .flex-description{
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: center;
    }
    .grid-products {
        display: grid;
        grid-template-columns: auto auto auto;
        grid-column-gap: 20px;
        justify-items: center;
        margin-top: 30px;
    }

    .item-grid-products {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: white;
        margin-bottom: 40px;
    }

    .img-product {
        max-width: 400px;
    }
</style>


@endsection