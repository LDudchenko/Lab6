@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contacts.css">
@endsection 

@section('title') Контакти @endsection

@section('content')

<section class="contactsBlock">
        <div class="container">
            <h2>Є питання або пропозиції?</h2>

            <form action="{{route('contact-form')}}" method="POST">
                 @csrf       
                <p>Ваше ім’я*</p>
                <input name="name" id="name">
                <p>Ваш Email*</p>
                <input name="email" id="phone">
                <p>Тема повідомлення*</p>
                <input name="subject"  id="subject">
                <p>Повідомлення</p>
                <textarea name="comments" id="comments"></textarea>
                <button type="submit" name="send">Замовити послугу</button>
            </form>
        </div>
    </section>
@endsection