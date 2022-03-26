@extends('layouts.main')
@section('title','Vegmein')
@section('content')
<div class="card">
    <div class="section center">
        <h1>{{$receita['title']}}</h1>
    </div>
    <div class="section center">
        <img src="{{$receita['image']}}" alt="Imagem da receita">
    </div>
    <div class="section">
        <p>{{$receita['summary']}}</p>
    </div>
    <div class="section column">
        <h3>Ingredientes</h3>
        <ul>
            @foreach($receita['extendedIngredients'] as $ingrediente)
            <li>{{$ingrediente['original']}}</li>
            @endforeach
        </ul>
    </div>
    <div class="section column">
        <h3>Modo de preparo</h3>
        @foreach ($receita['analyzedInstructions'][0]['steps'] as $step)
            <h4>Passo {{$step['number']}}</h4>
            <p>{{$step['step']}}</p>
            <p>
                @foreach($step['ingredients'] as $ingredientes)
                {{$ingredientes['name']}}
                @endforeach
            </p>
        @endforeach
    </div>
    
</div>
@endsection