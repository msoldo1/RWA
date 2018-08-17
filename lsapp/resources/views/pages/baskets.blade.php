@extends('layouts.app')

@section('content')   
    <h1>Basket</h1>
    <h3>Cijena: {{$post->cost}} $</h3>
    <h3>Naziv:  {{$post->title}}</h3>
    <h3>Kratki opis:{{$post->body}}</h3>

    <a href="/" class="btn btn-success" >Potvrdi kupnju</a>
@endsection