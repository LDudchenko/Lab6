@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/one-product.css">
    <link rel="stylesheet" href="../css/allergen.css">
@endsection 
@section('title') {{$data->name}} @endsection

@section('content')
        <div class="container">
            <h1>{{$data->name}}</h1> 
            <p>{{$data->description}}</p>
            <h2>У яких ще цукерках пристуній?</h2>
            <ul class="productsWithAllergens">
            @foreach($data->products as $product)
                <li class="productWithAllergens"><a  href="{{route('product-one', $product->id)}}">{{$product->name}}</li>
            @endforeach
            </ul>
        </div> 
</div>
@endsection