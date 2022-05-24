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
                <div class="card-body">
                        @foreach($products as $product)
                            <figure>
                                <a href="{{url('/detail/'.$product->id)}}"><img src="{{ asset('images/'.$product->imagen_producto)}}" alt="producto"></a>
                                <figcaption>{{$product->nombre_producto}} - {{$product->precio_producto}}€ </figcaption>
                            </figure>
                        @endforeach
                    </div>
            @endguest
        </div>
    </div>
</div>
@endsection
