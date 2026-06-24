@extends('layouts.app')

@section('content')
<section class="inner-hero budget-hero">
    <div class="container">
        <span class="page-kicker">Budget Overview</span>
        <h1>Estimated budget plan for ODRONCON 2026.</h1>
        <p>
            A transparent category-wise budget covering venue, hackathon, expo, branding,
            hospitality, protocol, technology, logistics, and contingency.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        @php
            $budget = [
                ['category' => 'Venue Infrastructure, Stage, Seating, Power, Setup', 'amount' => 500000],
                ['category' => 'Hackathon Prize Pool', 'amount' => 1500000],
                ['category' => 'Exhibition Pavilion & Startup Booths', 'amount' => 700000],
                ['category' => 'Branding, Printing, Event Collaterals', 'amount' => 500000],
                ['category' => 'Digital Marketing, PR & Media Coverage', 'amount' => 500000],
                ['category' => 'Hospitality, Food & Refreshments', 'amount' => 600000],
                ['category' => 'Guest Travel, Accommodation & Protocol', 'amount' => 900000],
                ['category' => 'Technology Setup, Internet, AV, Streaming', 'amount' => 400000],
                ['category' => 'Operations Team, Security, Volunteers, Logistics', 'amount' => 500000],
                ['category' => 'Contingency & Miscellaneous', 'amount' => 400000],
            ];

            $total = array_sum(array_column($budget, 'amount'));

            function indianCurrency($amount) {
                $amount = (string) $amount;
                $lastThree = substr($amount, -3);
                $rest = substr($amount, 0, -3);
                if ($rest !== '') {
                    $rest = preg_replace('/\B(?=(\d{2})+(?!\d))/', ',', $rest);
                    return $rest . ',' . $lastThree;
                }
                return $lastThree;
            }
        @endphp

        <div class="row g-4 align-items-start">
            <div class="col-lg-8">
                <div class="budget-table-card">
                    <div class="table-responsive">
                        <table class="table budget-table align-middle">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th class="text-end">Estimated Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($budget as $row)
                                    <tr>
                                        <td>{{ $row['category'] }}</td>
                                        <td class="text-end">₹{{ indianCurrency($row['amount']) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Estimated Budget</th>
                                    <th class="text-end">₹{{ indianCurrency($total) }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="budget-summary">
                    <span>Total Budget</span>
                    <h2>₹{{ indianCurrency($total) }}</h2>
                    <p>
                        This budget supports a full-scale conclave with hackathon, exhibition,
                        investor connect, media, protocol, and event operations.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-neon w-100">Discuss Sponsorship</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space pt-0">
    <div class="container">
        <div class="section-heading text-center">
            <span>Need & Support</span>
            <h2>Support required to execute ODRONCON at state and national scale.</h2>
        </div>

        <div class="need-grid">
            @php
                $needs = [
                    'Strategic Guidance',
                    'Sponsorship Support',
                    'Department Coordination',
                    'Dignitary Presence',
                    'Startup Mobilization',
                    'State Promotion',
                    'Pilot Projects',
                    'Long-Term Ecosystem Growth',
                ];
            @endphp

            @foreach($needs as $index => $need)
                <div class="need-card">
                    <b>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</b>
                    <h3>{{ $need }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
