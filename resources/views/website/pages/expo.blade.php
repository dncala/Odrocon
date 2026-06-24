@extends('layouts.app')

@section('content')
<section class="inner-hero expo-hero">
    <div class="container">
        <span class="page-kicker">Odisha Drone Expo 2026</span>
        <h1>Odisha’s first large-scale drone and aerial technology exhibition.</h1>
        <p>
            A premium exhibition platform for startups, OEMs, innovators, technology
            brands, government buyers, industry leaders, and ecosystem partners.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="section-heading text-center">
            <span>Expo Highlights</span>
            <h2>From technology display to business conversion.</h2>
        </div>

        <div class="expo-grid">
            @php
                $items = [
                    ['icon' => 'ri-flag-line', 'title' => 'Milestone', 'text' => 'Odisha’s first large-scale drone and aerial technology exhibition.'],
                    ['icon' => 'ri-store-3-line', 'title' => '35+ Booths', 'text' => 'Premium booths for startups, OEMs, innovators, and drone technology brands.'],
                    ['icon' => 'ri-broadcast-line', 'title' => 'Live Showcase', 'text' => 'Live drone demonstrations, product launches, and next-generation displays.'],
                    ['icon' => 'ri-handshake-line', 'title' => 'Business', 'text' => 'Direct B2B networking with departments, industries, and enterprise buyers.'],
                    ['icon' => 'ri-gift-line', 'title' => 'Opportunity', 'text' => 'Partnerships, orders, investments, and long-term ecosystem growth.'],
                    ['icon' => 'ri-earth-line', 'title' => 'Odisha Visibility', 'text' => 'A state-level platform to project Odisha as a drone-ready innovation destination.'],
                ];
            @endphp

            @foreach($items as $item)
                <div class="expo-card">
                    <i class="{{ $item['icon'] }}"></i>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-space pt-0">
    <div class="container">
        <div class="expo-strip">
            <div>
                <h2>Who should exhibit?</h2>
                <p>
                    Drone startups, OEMs, component manufacturers, GIS companies, AI/ML vision platforms,
                    agri-tech firms, robotics companies, training institutes, incubators, and service providers.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-neon">Book Exhibition Interest</a>
        </div>
    </div>
</section>
@endsection
