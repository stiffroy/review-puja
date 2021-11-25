@extends('master')
@section('title','start')
@section('pagesection')
<div class="container">
    <label>Correct : {{$c}}</label>
    <label>Incorrect : {{$w}}</label>
    <label>Result : {{$c}}/{{$c+$w}}</label><br/>
    <a href="/"><button class="btn btn-primary">Finish Quiz</button></a>
    <a href="/">Back</a>
</div>
@endsection