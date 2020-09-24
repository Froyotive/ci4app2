<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Froyotive Pages',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' =>
            [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Abc No. 32',
                    'kota' => 'Malang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Setiabudi No. 12',
                    'kota' => 'Malang'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
    //--------------------------------------------------------------------

}
