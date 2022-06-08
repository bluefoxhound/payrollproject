<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        return view('site/page/home');
    }

    public function login()
    {
        return view('site/page/login');
    }
}
