<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'ODRONCON 2026 | Odisha Drone Conclave' }}</title>

    <meta name="description" content="ODRONCON 2026 — Odisha Drone Conclave, Bhubaneswar. Innovate, Connect, Transform.">
    <meta name="theme-color" content="#061B46">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/odroncon.css') }}" rel="stylesheet">
</head>
<body>
    <div class="site-glow site-glow-one"></div>
    <div class="site-glow site-glow-two"></div>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/odroncon.js') }}"></script>
</body>
</html>
