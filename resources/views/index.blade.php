@extends('layout.base')

@section('title', 'DC Comics')

@section('pageContent')
<h1>MAIN</h1>

<ul>
    @foreach ($fumetti as $fumetto)
        <li>{{$fumetto["series"]}}</li> 
    @endforeach
</ul>
    
@endsection