@extends('website.layouts.app')
@section('content')
<section class="hero-section">
    <div class="hero-grid"></div>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="hero-badge">
                    <i class="ri-sparkling-2-line"></i>
                    Odisha’s Flagship Drone Innovation Platform
                </div>
                <h1 class="hero-title">
                    ODRONCON <span>2026</span>
                    <em>Odisha Drone Conclave</em>
                </h1>
                <p class="hero-subtitle">
                    A two-day national platform uniting startups, students, investors,
                    industry leaders, government, and academia to position Odisha as
                    India’s next drone innovation hub.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn btn-neon btn-lg">
                        Become a Partner <i class="ri-arrow-right-up-line"></i>
                    </a>
                    <a href="{{ route('hackathon') }}" class="btn btn-glass btn-lg">
                        Explore Hackathon
                    </a>
                </div>

                <div class="hero-meta">
                    <div>
                        <i class="ri-calendar-event-line"></i>
                        <span>7–8 August 2026</span>
                    </div>
                    <div>
                        <i class="ri-map-pin-line"></i>
                        <span>Bhubaneswar, Odisha</span>
                    </div>
                    <div>
                        <i class="ri-rocket-2-line"></i>
                        <span>Innovate | Connect | Transform</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="drone-stage">
                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>
                    <div class="drone-card">
                        <div class="drone-body">
                            <span></span><span></span><span></span><span></span>
                            <i class="ri-camera-lens-line"></i>
                        </div>
                        <h3>Future of Aerial Technology</h3>
                        <p>Agriculture • Mining • Logistics • Disaster Response • Smart Cities • Defense</p>
                    </div>
                    <div class="floating-chip chip-one"><i class="ri-seedling-line"></i> Agri Drone</div>
                    <div class="floating-chip chip-two"><i class="ri-radar-line"></i> Mapping</div>
                    <div class="floating-chip chip-three"><i class="ri-shield-star-line"></i> Defense</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section section-space">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <strong>80–100</strong>
                    <span>Hackathon Teams</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <strong>₹15L</strong>
                    <span>Prize Pool</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <strong>35+</strong>
                    <span>Premium Booths</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <strong>₹20L</strong>
                    <span>Startup Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space pt-0">
    <div class="container">
        <div class="section-heading text-center">
            <span>Event Architecture</span>
            <h2>One conclave. Multiple growth engines.</h2>
            <p>
                ODRONCON brings innovation challenges, exhibition, investor access,
                flying demonstrations, networking, and post-event acceleration into one platform.
            </p>
        </div>

        <div class="row g-4">
            @php
                $cards = [
                    ['icon' => 'ri-lightbulb-flash-line', 'title' => 'National Drone Hackathon', 'text' => 'A 36-hour innovation challenge focused on breakthrough drone ideas and prototypes.', 'route' => 'hackathon'],
                    ['icon' => 'ri-store-2-line', 'title' => 'Startup Expo', 'text' => 'Premium exhibition booths for startups, OEMs, innovators, and drone technology brands.', 'route' => 'expo'],
                    ['icon' => 'ri-funds-line', 'title' => 'Investor Connect', 'text' => 'Curated startup pitch sessions, one-on-one funding meetings, and market linkages.', 'route' => 'investment'],
                    ['icon' => 'ri-flight-takeoff-line', 'title' => 'Drone Showcase', 'text' => 'Live flying demonstrations across racing, agriculture, mapping, logistics, and surveillance.', 'route' => 'showcase'],
                    ['icon' => 'ri-team-line', 'title' => 'Collaboration Network', 'text' => 'Government, industry, academia, defense, startups, media, and ecosystem leaders.', 'route' => 'about'],
                    ['icon' => 'ri-hand-heart-line', 'title' => 'Post Event Support', 'text' => 'Incubation, funding connections, pilot projects, careers, and visibility for winners.', 'route' => 'support'],
                ];
            @endphp

            @foreach($cards as $card)
                <div class="col-lg-4 col-md-6">
                    <a class="feature-card" href="{{ route($card['route']) }}">
                        <div class="feature-icon"><i class="{{ $card['icon'] }}"></i></div>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                        <span>Explore <i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="impact-section section-space">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="section-heading mb-0">
                    <span>Odisha Impact</span>
                    <h2>Building a long-term drone ecosystem for the state.</h2>
                    <p>
                        The conclave is designed to create investment flow, startup growth,
                        youth skilling, employment generation, practical use cases, and
                        long-term ecosystem development.
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="timeline-grid">
                    <div class="timeline-item">
                        <b>01</b><h4>Innovation</h4><p>Real problem statements and prototype-driven solutions.</p>
                    </div>
                    <div class="timeline-item">
                        <b>02</b><h4>Collaboration</h4><p>Partnerships across departments, institutions, and industries.</p>
                    </div>
                    <div class="timeline-item">
                        <b>03</b><h4>Investment</h4><p>Investor access, CSR support, grants, and pilot opportunities.</p>
                    </div>
                    <div class="timeline-item">
                        <b>04</b><h4>Employment</h4><p>Career pathways, internships, mentoring, and startup incubation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section section-space">
    <div class="container">
        <div class="cta-card">
            <div>
                <span>Ready to collaborate?</span>
                <h2>Join ODRONCON 2026 as a sponsor, partner, exhibitor, investor, or participant.</h2>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contact Team</a>
        </div>
    </div>
</section>
@endsection
