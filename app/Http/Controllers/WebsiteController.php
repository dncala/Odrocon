<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home', [
            'title' => 'ODRONCON 2026 | Odisha Drone Conclave',
        ]);
    }

    public function about()
    {
        return view('website.pages.about', [
            'title' => 'About ODRONCON 2026',
        ]);
    }

    public function hackathon()
    {
        return view('website.pages.hackathon', [
            'title' => 'National Drone Hackathon',
        ]);
    }

    public function expo()
    {
        return view('website.pages.expo', [
            'title' => 'Odisha Drone Expo 2026',
        ]);
    }

    public function showcase()
    {
        return view('website.pages.showcase', [
            'title' => 'Drone Showcase & Grand Prix',
        ]);
    }

    public function investment()
    {
        return view('website.pages.investment', [
            'title' => 'Investor Connect',
        ]);
    }

    public function support()
    {
        return view('website.pages.support', [
            'title' => 'Post Event Support',
        ]);
    }

    public function budget()
    {
        return view('website.pages.budget', [
            'title' => 'Budget Overview',
        ]);
    }

    public function contact()
    {
        return view('website.pages.contact', [
            'title' => 'Contact & Partnership',
        ]);
    }
}
