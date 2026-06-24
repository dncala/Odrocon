@extends('layouts.app')

@section('content')
<section class="inner-hero contact-hero">
    <div class="container">
        <span class="page-kicker">Contact & Partnership</span>
        <h1>Partner with Odisha’s drone innovation movement.</h1>
        <p>
            Connect for sponsorship, exhibition booths, investor participation, hackathon
            collaboration, government partnership, and institutional support.
        </p>
    </div>
</section>

<section class="section-space">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="contact-panel">
                    <h2>ODRONCON 2026</h2>
                    <p>
                        Use this static contact section for now. Later you can connect it with
                        Laravel mail, database, CRM, or WhatsApp API.
                    </p>

                    <div class="contact-line">
                        <i class="ri-calendar-event-line"></i>
                        <div>
                            <span>Event Date</span>
                            <strong>7–8 August 2026</strong>
                        </div>
                    </div>

                    <div class="contact-line">
                        <i class="ri-map-pin-line"></i>
                        <div>
                            <span>Location</span>
                            <strong>Bhubaneswar, Odisha</strong>
                        </div>
                    </div>

                    <div class="contact-line">
                        <i class="ri-mail-line"></i>
                        <div>
                            <span>Email</span>
                            <strong>info@odroncon.in</strong>
                        </div>
                    </div>

                    <div class="contact-line">
                        <i class="ri-phone-line"></i>
                        <div>
                            <span>Phone</span>
                            <strong>+91 00000 00000</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <form class="contact-form" action="javascript:void(0)">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Your full name">
                        </div>
                        <div class="col-md-6">
                            <label>Organization</label>
                            <input type="text" class="form-control" placeholder="Company / Institution">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="your@email.com">
                        </div>
                        <div class="col-md-6">
                            <label>Interest Type</label>
                            <select class="form-select">
                                <option>Sponsorship</option>
                                <option>Exhibition Booth</option>
                                <option>Investor Connect</option>
                                <option>Hackathon Participation</option>
                                <option>Government / Institutional Partnership</option>
                                <option>Media / PR</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label>Message</label>
                            <textarea class="form-control" rows="6" placeholder="Tell us how you want to collaborate"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-neon btn-lg" type="button">
                                Submit Interest <i class="ri-send-plane-line"></i>
                            </button>
                            <p class="form-note">
                                Static demo form. Backend submission can be added later.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
