<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home - Youtube';

        echo view('user/templates/html-header', $data);
        echo view('user/templates/header');
        echo view('user/pages/home');
        echo view('user/templates/footer');
        echo view('user/templates/html-footer');
    }
}
