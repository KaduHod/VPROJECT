@extends('layouts.main')
@section('title','Vegmein')
@section('content')
<form action="/searchRecepis" method="post">
    @csrf
    @foreach($ingredientes as $ingrediente)
    <label for="{{$ingrediente}}">{{$ingrediente}}</label>
    <input type="checkbox" value="{{$ingrediente}}" name="{{$ingrediente}}" id="">
    <br>
    @endforeach
    <button type="submit">Pesquisar</button>
</form>
    
@endsection
