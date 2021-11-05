@extends('layout.base')

@section('title', 'DC Comics')

@section('pageContent')
    {{-- hero  --}}
    <section class="hero">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron Image">
    </section>
    {{-- current series  --}}
    <section class="container">
        <div class="current-series">
            CURRENT SERIES
        </div>
        <div class="comics">
            @foreach ($fumetti as $fumetto)
                <div class="single-comic">
                    <div class="image">
                        <img src="{{$fumetto["thumb"]}}" alt="">
                    </div>
                    <h4>{{strtoupper($fumetto["series"])}}</h4>
                </div>
            @endforeach
        </div>
        <div class="btn">
            <button>LOAD MORE</button>
        </div>
    </section>
@endsection