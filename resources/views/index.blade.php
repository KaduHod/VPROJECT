@extends('layouts.main')
@section('title','Vegmein')
@section('content')
{{--<form action="/searchRecepis" method="post">
    @csrf
    @foreach($ingredientes as $ingrediente)
    <label for="{{$ingrediente}}">{{$ingrediente}}</label>
    <input type="checkbox" value="{{$ingrediente}}" name="{{$ingrediente}}" id="">
    <br>
    @endforeach
    <button type="submit">Pesquisar</button>
</form>--}}

<form action="/searchRecepis" method="post" class='center'>
@csrf
<div class="scroll">
    <input type="text" placeholder="Procura aqui.." id="myInput" onkeyup="filterFunction()" autocomplete="off">
    <div class="ingredientes-content" id="myDropdown">
        @foreach($ingredientes as $ingrediente)
        <a href="#">
            <label for="{{$ingrediente}}">{{$ingrediente}}</label>
            <input type="checkbox" value="{{$ingrediente}}" name="{{$ingrediente}}" id="" class="input">
        </a>
        @endforeach
    </div>
    <button type="submit">Pesquisar</button>
</div>
</form>

@endsection