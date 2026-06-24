@php
    $links = [
        ['name' => 'Home', 'route' => 'home'],
        ['name' => 'About', 'route' => 'about'],
        ['name' => 'Hackathon', 'route' => 'hackathon'],
        ['name' => 'Expo', 'route' => 'expo'],
        ['name' => 'Showcase', 'route' => 'showcase'],
        ['name' => 'Investors', 'route' => 'investment'],
        ['name' => 'Support', 'route' => 'support'],
        ['name' => 'Budget', 'route' => 'budget'],
        ['name' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<nav class="navbar navbar-expand-xl fixed-top od-navbar">
    <div class="container">
        <a class="navbar-brand od-brand" href="{{ route('home') }}">
            <span class="brand-mark">
                <i class="ri-flight-takeoff-line"></i>
            </span>
            <span>
                <strong>ODRONCON</strong>
                <small>Odisha Drone Conclave</small>
            </span>
        </a>

        <button class="navbar-toggler od-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <i class="ri-menu-3-line"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-1">
                @foreach($links as $link)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs($link['route']) ? 'active' : '' }}" href="{{ route($link['route']) }}">
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
                <li class="nav-item ms-xl-2">
                    <a class="btn btn-neon btn-sm" href="{{ route('contact') }}">
                        Partner Now <i class="ri-arrow-right-up-line"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
