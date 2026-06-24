@extends('layouts.app')

@section('content')
<section class="inner-hero investment-hero">
    <div class="container">
        <span class="page-kicker">Investment Box</span>
        <h1>Exclusive Investor Connect Zone for high-potential drone startups.</h1>
        <p>
            Curated pitch sessions, one-on-one funding meetings, incubation access,
            CSR connections, corporate partnerships, and market linkages.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="investment-roadmap">
            @php
                $items = [
                    ['no' => '01', 'icon' => 'ri-bank-card-line', 'title' => 'Capital', 'text' => 'Investor Connect Zone for high-potential drone and technology startups.'],
                    ['no' => '02', 'icon' => 'ri-group-line', 'title' => 'Networking', 'text' => 'One-on-one meetings for funding, partnerships, and business expansion.'],
                    ['no' => '03', 'icon' => 'ri-user-star-line', 'title' => 'Investors', 'text' => 'Participation from VC funds, angels, CSR leaders, banks, and corporates.'],
                    ['no' => '04', 'icon' => 'ri-plant-line', 'title' => 'Growth', 'text' => 'Access to incubation, grants, pilot projects, and market linkages.'],
                    ['no' => '05', 'icon' => 'ri-megaphone-line', 'title' => 'Pitching', 'text' => 'Curated startup pitch sessions before investors and decision-makers.'],
                    ['no' => '06', 'icon' => 'ri-rocket-2-line', 'title' => 'Expansion', 'text' => 'Helping Odisha startups scale from regional innovators to national brands.'],
                ];
            @endphp

            @foreach($items as $item)
                <div class="invest-card">
                    <span>{{ $item['no'] }}</span>
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
        <div class="investor-cta">
            <div>
                <span>For VC, CSR, banks, angel networks and corporates</span>
                <h2>Discover deployable drone innovation from Odisha and India.</h2>
                <p>
                    Meet curated startups with field-ready solutions and early-stage prototypes
                    that can move into pilot projects, procurement, and growth capital.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Register Investor Interest</a>
        </div>
    </div>
</section>
@endsection
