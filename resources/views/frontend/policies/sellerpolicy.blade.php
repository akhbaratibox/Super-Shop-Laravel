@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4">
        <div class="container">
            @php
                echo \App\Policy::where('name', 'seller_policy')->first()->content;
            @endphp
        </div>
    </section>

@endsection
