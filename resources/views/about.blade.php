<!--           Contents for tutorial 5         -->

@extends('layout')

@section('content')

<!--           Content for tutorial 3          -->

            @unless(empty($people))
            
                there are some people<br>
            
            @endunless

            @if(!empty($people))

                There are some people<br>
            
            @else
            
                There are no people<br>
            
            @endif

            @foreach($people as $person)
 
                <li>{{ $person }}</li>
             
            @endforeach
<!--           Content for tutorial 3 ends          -->

@stop

<!--           Contents for tutorial 5 ends         -->