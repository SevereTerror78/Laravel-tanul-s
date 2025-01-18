@extends('layout')
@section('content')
   <h1>{{$aitool->name}}{{$aitool->hasFreePlan ? '✅': '✖'}}</h1>

   <h1>Kategória: {{$aitool->category->name}}</h1>

   <p>{{$aitool->desctiption}}</p>
   <a>{{$aitool->link}}</a>
   <small>{{$aitool->price}}</small>

    <ul>
        @foreach($aitool->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>

@endsection
