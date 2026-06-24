@extends('layouts.app')

@section('content')
<section class="inner-hero">
    <div class="container">
        <span class="page-kicker">About ODRONCON</span>
        <h1>Odisha’s first flagship drone conclave for innovation, collaboration, and growth.</h1>
        <p>
            A two-day platform connecting startups, students, investors, industry leaders,
            government departments, and academia around next-generation drone applications.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="glass-panel h-100">
                    <span class="panel-label">Vision</span>
                    <h2>Position Odisha as a national drone innovation hub.</h2>
                    <p>
                        ODRONCON 2026 aims to create a high-visibility platform where innovation
                        meets adoption. It highlights practical drone solutions for agriculture,
                        mining, logistics, disaster response, smart cities, defense, and governance.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="glass-panel h-100 green-panel">
                    <span class="panel-label">Mission</span>
                    <h2>Create a complete drone ecosystem pipeline.</h2>
                    <p>
                        From idea generation to investor access, from demonstrations to pilot projects,
                        and from student talent to startup acceleration, the event builds a strong bridge
                        between innovation and real deployment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space pt-0">
    <div class="container">
        <div class="section-heading text-center">
            <span>Core Pillars</span>
            <h2>Five principles shaping ODRONCON 2026.</h2>
        </div>

        <div class="pillar-wrap">
            @php
                $pillars = [
                    ['no' => '01', 'title' => 'Leadership', 'text' => 'Innovation excellence with strong institutional standards.'],
                    ['no' => '02', 'title' => 'Collaboration', 'text' => 'Data, insights, and networks guiding strategic decisions.'],
                    ['no' => '03', 'title' => 'Innovation', 'text' => 'Sustainability and trust at the center of drone operations.'],
                    ['no' => '04', 'title' => 'Adoption', 'text' => 'Intuitive and impactful product designs for real users.'],
                    ['no' => '05', 'title' => 'Growth', 'text' => 'Flexible ecosystem support for evolving markets and technologies.'],
                ];
            @endphp

            @foreach($pillars as $pillar)
                <div class="pillar-card">
                    <b>{{ $pillar['no'] }}</b>
                    <h3>{{ $pillar['title'] }}</h3>
                    <p>{{ $pillar['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-space collaboration-section">
    <div class="container">
        <div class="section-heading text-center">
            <span>Collaboration & Dignitary Presence</span>
            <h2>Designed for high-level participation and national visibility.</h2>
        </div>

        <div class="row g-4">
            @php
                $groups = [
                    ['icon' => 'ri-plane-line', 'title' => 'Aviation', 'text' => 'Civil aviation leadership and aviation ecosystem representatives.'],
                    ['icon' => 'ri-government-line', 'title' => 'Leadership', 'text' => 'Chief Minister, cabinet ministers, policymakers, and senior state leadership.'],
                    ['icon' => 'ri-building-4-line', 'title' => 'Governance', 'text' => 'Departments including Industries, MSME, Agriculture, Transport, Revenue, Steel & Mines.'],
                    ['icon' => 'ri-community-line', 'title' => 'Industry', 'text' => 'PSUs, corporates, CMDs, chairpersons, and industry bodies.'],
                    ['icon' => 'ri-rocket-line', 'title' => 'Entrepreneurs', 'text' => 'Founders, CEOs, investors, and national startup ecosystem leaders.'],
                    ['icon' => 'ri-graduation-cap-line', 'title' => 'Influence', 'text' => 'Academia leaders, DGCA experts, defense representatives, and media delegates.'],
                ];
            @endphp

            @foreach($groups as $group)
                <div class="col-lg-4 col-md-6">
                    <div class="mini-card">
                        <i class="{{ $group['icon'] }}"></i>
                        <h3>{{ $group['title'] }}</h3>
                        <p>{{ $group['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
