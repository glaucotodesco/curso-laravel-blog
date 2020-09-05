@extends('layouts.app')

@section('content')
    <h1>Services Usando Layout!</h1>
    
    @if(count($services) > 0)
        <ul>
            @foreach ($services as $itemService)
                <li>{{$itemService}}</li>    
            @endforeach 
        </ul>
    @endif
@endsection
