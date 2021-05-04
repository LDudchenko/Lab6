@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/products.css">
@endsection 

@section('title') Наші товари @endsection

@section('content')
<div class="container">
    <div class="wrap">
        @foreach($data as $el)
        <div class="product">
            <a href="{{route('allProducts', $el->id)}}">
                <h2>{{$el->name}}</h2>
                <img src="/img/{{$el->img}}.png" alt="">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection