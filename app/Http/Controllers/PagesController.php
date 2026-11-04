<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        $title = "TechNewsdex";
        $subtitle = "HotNews";
        return view(
            'pages.landing',
            compact('title', 'subtitle')
        );
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function Blog()
    {
        return view('pages.Blog');
    }
    public function report()
    {
        return view('pages.report');
    }
    public function profile()
    {
        $first_name = "Sakmai";
        $last_name = "Somnang";
        $full_name = "Sakmai Somnang";
        $major = "Computer Science";
        $subject = "Web_Framework";
        return view(
            'pages.profile',
            compact('first_name', 'last_name', 'full_name', 'major', 'subject')
        );
    }

}
