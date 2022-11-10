<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function privacy()
    {
        app()->setLocale('en');
        $this->data['title'] = 'Mooti App | Privacy';
        $this->data['lang'] = 'en';

        return view('pages.public.privacy', $this->data);
    }
}
