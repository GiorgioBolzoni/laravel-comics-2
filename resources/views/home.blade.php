@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="container">
        <h1>HOME</h1>
        <div class="row">
            @foreach ($comics as $fumetti)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $fumetti['thumb'] }}" alt="{{ $fumetti['title'] }}">

                    </div>
                    <div>{{ $fumetti['title'] }}</div>
                </div>
            @endforeach

        </div>

    </section>


@endsection
