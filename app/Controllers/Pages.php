<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | SPK'
        ];

        return view('pages/home', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | SPK'
        ];

        return view('pages/login', $data);
    }
}
