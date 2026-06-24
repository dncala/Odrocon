@extends('layouts.app')

@section('content')
<section class="inner-hero hackathon-hero">
    <div class="container">
        <span class="page-kicker">National Drone Hackathon</span>
        <h1>36-hour innovation challenge for next-generation drone solutions.</h1>
        <p>
            A national-level challenge for students, startups, engineers, and innovators to
            solve real drone-use problems across agriculture, mining, logistics, disaster
            response, and defense.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="highlight-box">
                    <i class="ri-trophy-line"></i>
                    <h2>₹15 Lakh</h2>
                    <p>Prize pool with recognition, mentorship, and incubation opportunities.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="highlight-box blue">
                    <i class="ri-team-line"></i>
                    <h2>80–100 Teams</h2>
                    <p>Participation from top students, startups, and innovators.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="highlight-box green">
                    <i class="ri-seedling-line"></i>
                    <h2>₹20 Lakh</h2>
                    <p>Support for top 5 startups with incubation and growth opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space pt-0">
    <div class="container">
        <div class="section-heading text-center">
            <span>Hackathon Flow</span>
            <h2>From problem statement to prototype demonstration.</h2>
        </div>

        <div class="process-road">
            @php
                $steps = [
                    ['no' => '01', 'title' => 'Challenge', 'text' => 'India-level 36-hour innovation challenge focused on next-generation drone solutions.'],
                    ['no' => '02', 'title' => 'Rewards', 'text' => 'Prize pool with recognition, mentorship, and incubation support.'],
                    ['no' => '03', 'title' => 'Participation', 'text' => '80–100 teams from students, startups, and innovators.'],
                    ['no' => '04', 'title' => 'Acceleration', 'text' => 'Top startups receive support along with incubation and growth opportunities.'],
                    ['no' => '05', 'title' => 'Solutions', 'text' => 'Real use-cases from agriculture, mining, logistics, disaster response, and defense.'],
                ];
            @endphp

            @foreach($steps as $step)
                <div class="road-step">
                    <span>{{ $step['no'] }}</span>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-space usecase-section">
    <div class="container">
        <div class="section-heading">
            <span>Problem Domains</span>
            <h2>Drone solutions that can directly support governance and industry.</h2>
        </div>

        <div class="usecase-grid">
            <div><i class="ri-seedling-line"></i><h4>Agriculture</h4><p>Crop monitoring, spraying, yield analysis, and precision farming.</p></div>
            <div><i class="ri-mountain-line"></i><h4>Mining</h4><p>Surveying, safety monitoring, stockpile analysis, and inspection.</p></div>
            <div><i class="ri-truck-line"></i><h4>Logistics</h4><p>Last-mile delivery, medical supply transport, and remote access delivery.</p></div>
            <div><i class="ri-alarm-warning-line"></i><h4>Disaster Response</h4><p>Rapid mapping, search and rescue, damage assessment, and relief planning.</p></div>
            <div><i class="ri-shield-star-line"></i><h4>Defense</h4><p>Surveillance, reconnaissance, perimeter monitoring, and mission support.</p></div>
        </div>
    </div>
</section>
@endsection
