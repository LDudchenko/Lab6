@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/products.css">
@endsection 

@section('title') Наші товари @endsection

@section('content')
<div class="container">
    <h1>{{$data[0]->typeofproduct->name}}</h1>
    <div class="wrap">
        @foreach($data as $el)
        <div class="product">
            <a href="{{route('product-one', $el->id)}}">
                <h2>{{$el->name}}</h2>
                <img src="/img/{{$el->img}}.png" alt="">
                <p>Ціна: {{$el->price}} грн.<br>
                Кількість: {{$el->amount}}.</p>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection