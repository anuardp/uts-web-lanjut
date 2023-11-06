<?php

namespace App\Controllers;

class AboutMe extends BaseController
{
    public function index(): string
    {
        return view('about_me');
    }
}
