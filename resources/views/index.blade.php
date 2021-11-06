@extends('layout.base')

@section('title', 'DC Comics')

@section('pageContent')
    {{-- hero  --}}
    <section class="hero">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron Image">
    </section>
    {{-- current series  --}}
    <section class="current">
        <div class="container">
            <div class="current-series">
                CURRENT SERIES
            </div>
            <div class="comics">
                @foreach ($fumetti as $fumetto)
                    <div class="single-comic">
                        <a href="#">
                            <div class="image">
                                <img src="{{$fumetto["thumb"]}}" alt="">
                            </div>
                            <h4>{{strtoupper($fumetto["series"])}}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="btn">
                <button>LOAD MORE</button>
            </div>
        </div>
    
    </section>
    <section class="third-section">
        <div class="container">
            <ul>
                <li>
                    <div class="icon">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Digital Comics Logo">
                    </div>
                    <h4>DIGITAL COMICS</h4>
                </li>
                <li>
                    <div class="icon">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="Digital Comics Logo">
                    </div>
                    <h4>DC MERCHANDISE</h4>
                </li>
                <li>
                    <div class="icon">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Digital Comics Logo">
                    </div>
                    <h4>SUBSCRIPTION</h4>
                </li>
                <li>
                    <div class="icon locator">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Digital Comics Logo">
                    </div>
                    <h4>COMIC SHOP LOCATOR</h4>
                </li>
                <li>
                    <div class="icon">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="Digital Comics Logo">
                    </div>
                    <h4>DC POWER VISA</h4>
                </li>
            </ul>
        </div>
    </section>
@endsection