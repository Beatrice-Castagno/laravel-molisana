@extends('layouts.main')

@section('title')
    Prodotti Molisana    
@endsection

@section('main')
    <div class="products">
        <div class="container"> 
        <h1>{{$pasta['titolo']}}</h1>
        <img src="{{$pasta['src-h']}}">
        <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
        
        <p>
            {!! $pasta['descrizione'] !!}
        </p>
    </div>
    </div>
@endsection