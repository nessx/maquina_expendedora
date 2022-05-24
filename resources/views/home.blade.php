@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($products as $product)
                    <figure>
                        <!--<a href="{{url('/detail/'.$product->id)}}"><img src="{{ asset('images/'.$product->imagen_producto)}}" alt="producto"></a>-->
                        <figcaption>{{$product->nombre_producto}} - {{$product->precio_producto}}€ </figcaption>
                    </figure>
                    @endforeach

                    {{ __('Te voy a vender la vida ') }}
                    {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
