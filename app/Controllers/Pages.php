<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | Peminjaman Lab'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Peminjaman Lab'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Peminjaman Lab'
        ];

        return view('pages/contact', $data);
    }
}