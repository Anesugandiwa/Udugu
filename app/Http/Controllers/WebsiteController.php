<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function welcome(){
        SEOTools::setTitle('welcome - Udungu Institute');
        SEOTools::setDescription('Welcome to Udungu Institute where we empower future leaders in Africa.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@UdunguInstitute');

        return inertia('welcome', [
            'seo' => [
                'title' => SEOTools::getTitle(),
                'description' => SEOTools::getDescription(),
                'canonical' => SEOTools::getCanonical(),
            ],

        ]);

    }

    public function about(){
        SEOTools::setTitle('About Us | Udungu Institute');
        SEOTools::setDiscription('Learn about Udungu Institute\'s mission to drive educational excellence, innovation, and leadership across Africa. Discover how we empower communities through transformative learning experiences.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@UdunguInstitute');
        
        return inertia('About', [
            'seo' => [
                'title' => SEOTools::getTitle(),
                'description' => SEOTools::getDescription(),
                'canonical' => SEOTools::getCanonical(),
            ],
        ])

    }
}
