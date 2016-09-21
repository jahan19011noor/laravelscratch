@extends('layout')

@section('content')

    <h1>All data of the Table</h1>
    
    @foreach($cards as $card)
    
        <div>
            {{ $card->title }}
        </div>
        
    @endforeach
    
@stop