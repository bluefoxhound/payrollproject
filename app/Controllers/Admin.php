<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('client/page/dashboard');
    }

    public function account()
    {
        return view('client/page/account');
    }

}
