@extends('layouts.main')
@section('title','Vegmein')
@section('content')

@foreach ($receitas as $receita)
    <div class="card">
        <h1>{{$receita['title']}}</h1>
        <img src="{{$receita['image']}}" alt="">
        <a href="/show/{{$receita['id']}}">Ver receita</a>
    </div>
@endforeach
    
@endsection
