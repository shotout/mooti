<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App | Home';
        $this->data['lang'] = 'en';

        return view('pages.public.home', $this->data);
    }

    public function privacy()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App | Privacy';
        $this->data['lang'] = 'en';

        return view('pages.public.privacy', $this->data);
    }

    public function terms()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App | Terms Of Use';
        $this->data['lang'] = 'en';

        return view('pages.public.term', $this->data);
    }

    public function contact()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App | Contact Us';
        $this->data['lang'] = 'en';

        return view('pages.public.contact', $this->data);
    }

    public function ads()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App | ads.text';
        $this->data['lang'] = 'en';

        return view('pages.public.ads', $this->data);
    }
}
