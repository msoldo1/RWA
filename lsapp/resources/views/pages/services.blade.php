@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <ul class="list-group">
            @if(count($services)>0)
                @foreach($services as $service)
                    <li class="list-group-item" style="background-color:rgba(184, 198, 221,0.5);">{{$service}}</li>
                @endforeach
            @endif
        </ul>
        <style>
                body{
                        background: url('/storage/cover_images/Usluge.jpg') no-repeat center center fixed;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;    
                }

        
        
           </style>      
@endsection
