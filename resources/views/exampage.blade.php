@extends('master')
@section('title','dashboard')
@section('pagesection')
<div class="container">
<form method="post" action="/submitans">
    @csrf
    <div class="row">
        @foreach ($qs as $q)
        
           <h4># {{$q->question}}</h4>
           <input name="ans" value="a" type="radio">(A){{$q->a}}<br/>
           <input name="ans" value="b" type="radio">(B) {{$q->b}}<br/>
           <input name="ans" value="c" type="radio">(C) {{$q->c}}<br/>
           <input name="ans" value="d" type="radio">(D) {{$q->d}}<br/>
           <input name="dbans" value={{$q->ans}} style="visibility:hidden;" >
           
           @endforeach
           <button type="submit" class="btn btn-primary">Submit</button>
       
    </div>
</form>
</div>
@endsection