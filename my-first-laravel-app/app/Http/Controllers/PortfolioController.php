<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Banal, Lujille M.',

            'title' => 'Full Stack Web Developer',

            'email' => 'lujillebanal08@gmail.com',

            'phone' => '+639126810872',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocLqN-tZQOcJ_0yAjg1i0dWSxpsGARWjQuLq6kMoVIv2RYmOZ1I=s288-c-no',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'], // Project data

            'experience' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'], // Experience data

            'education' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'], // Education data

            'social_links' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}