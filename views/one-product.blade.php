@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/one-product.css">
@endsection 
@section('title') {{$data->name}} @endsection

@section('content')
<div class="container">
        <h1>{{$data->name}}</h1> 
        <div class="wrap">
            <img src="/img/{{$data->img}}.png" alt="">
            <div class="wrapForText">
                <p>Ціна: {{$data->price}} грн.<br>
                    Кількість: {{$data->amount}} шт.</p>
                <p>{{$data->description}}
                    <p>Строк придатності: {{$data->termOfSaving}}.</p> 
                    <p>Умови зберігання: {{$data->conditionsOfSaving}}</p>
                    <p>Алергени:<br>
                    @foreach($data->allergens as $allergen) 
                        <a class="allergen" href = "{{route('allergen', $allergen->id)}}">{{$allergen->name}}</a>
                    @endforeach</p>
                </p>
            </div>
        </div> 
</div>
@endsection