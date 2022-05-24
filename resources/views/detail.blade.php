@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Producto') }} - {{$product_detail->nombre_producto}}</div>

                <div class="card-body text-center">
                        <figure>
                            <a href="{{url('/detail/'.$product_detail->id)}}"><img src="{{ asset('images/'.$product_detail->imagen_producto)}}" alt="producto"></a>
                            <figcaption>{{$product_detail->nombre_producto}}</figcaption>
                            <figcaption>Pais de procedencia: {{$product_detail->pais_procedencia}} </figcaption>
                            <figcaption>Información nutricional: {{$product_detail->informacion_nutricional}}</figcaption>
                            <figcaption>Kcal: {{$product_detail->kcal}}</figcaption>
                            <figcaption>Precio: {{$product_detail->precio_producto}}€</figcaption>
                        </figure>
                        
                        <button type="button" class="btn btn-success m-3">Comprar</button>
                        <button type="button" class="btn btn-dark">Página principal</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection