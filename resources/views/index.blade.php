@extends('layouts.main')
@section('title','Vegmein')
@section('content')
    @foreach($receitas as $receita)
    <div style="border: 1px solid red; width:100%; heigth:fit-content;">
        <h1>{{$receita['title']}}</h1>
        <img src="{{$receita['image']}}" alt="">
        
            <h1>Ingredientes</h1>
            
            @foreach($receita['missedIngredients'] as $ingrediente)
            
            
            @foreach
        <
    </div>
    @endforeach
@endsection
