@extends('layouts.app')

@section('content')
<section class="inner-hero showcase-hero">
    <div class="container">
        <span class="page-kicker">Drone Showcase & Grand Prix</span>
        <h1>A live flying segment demonstrating real drone capability.</h1>
        <p>
            Participants, startups, and innovators demonstrate drones across racing,
            agriculture, mapping, logistics, FPV, surveillance, and innovation categories.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="showcase-visual">
                    <div class="runway"></div>
                    <div class="drone-icon drone-a"><i class="ri-flight-takeoff-line"></i></div>
                    <div class="drone-icon drone-b"><i class="ri-crosshair-2-line"></i></div>
                    <div class="drone-icon drone-c"><i class="ri-camera-3-line"></i></div>
                    <div class="score-card">
                        <span>Grand Prix</span>
                        <h3>Speed • Precision • Payload • Maneuverability</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading mb-3">
                    <span>Live Demonstration</span>
                    <h2>Turning drone innovation into an audience experience.</h2>
                    <p>
                        The showcase highlights real-time capabilities including speed,
                        precision, payload handling, maneuverability, mission execution,
                        and practical aerial performance. It gives teams direct visibility
                        before investors, industry leaders, and government stakeholders.
                    </p>
                </div>
                <div class="category-list">
                    <span>Racing</span>
                    <span>Agriculture</span>
                    <span>Mapping</span>
                    <span>Logistics</span>
                    <span>FPV</span>
                    <span>Surveillance</span>
                    <span>Innovation</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space pt-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="metric-card"><i class="ri-speed-up-line"></i><h4>Speed</h4></div>
            </div>
            <div class="col-md-3 col-6">
                <div class="metric-card"><i class="ri-focus-3-line"></i><h4>Precision</h4></div>
            </div>
            <div class="col-md-3 col-6">
                <div class="metric-card"><i class="ri-box-3-line"></i><h4>Payload</h4></div>
            </div>
            <div class="col-md-3 col-6">
                <div class="metric-card"><i class="ri-route-line"></i><h4>Mission Execution</h4></div>
            </div>
        </div>
    </div>
</section>
@endsection
