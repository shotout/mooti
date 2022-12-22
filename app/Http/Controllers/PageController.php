<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App - Motivation & Quotes';
        $this->data['lang'] = 'en';

        return view('pages.public.under', $this->data);
    }

    public function home()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App - Motivation & Quotes';
        $this->data['lang'] = 'en';

        return view('pages.public.home', $this->data);
    }

    public function privacy()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App - Motivation & Quotes | Privacy';
        $this->data['lang'] = 'en';

        return view('pages.public.privacy', $this->data);
    }

    public function terms()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App - Motivation & Quotes | Terms Of Use';
        $this->data['lang'] = 'en';

        return view('pages.public.term', $this->data);
    }

    public function contact()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App - Motivation & Quotes | Contact Us';
        $this->data['lang'] = 'en';

        return view('pages.public.contact', $this->data);
    }

    public function ads()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App - Motivation & Quotes | ads.text';
        $this->data['lang'] = 'en';

        return view('pages.public.ads', $this->data);
    }
}
