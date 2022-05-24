@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Productos') }}</div>

            <div class="card-body">
                @foreach($products as $product)
                    <figure>
                        <a href="{{url('/detail/'.$product->id)}}"><img src="{{ asset('images/'.$product->imagen_producto)}}" alt="producto"></a>
                        <figcaption>{{$product->nombre_producto}} - {{$product->precio_producto}}€ </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
