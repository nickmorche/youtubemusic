<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminController extends BaseController{

    public function index(){
        $data['title'] = 'Home - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/home');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
        
    }

    public function icons(){
        $data['title'] = 'Ícones - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/icons');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function map(){
        $data['title'] = 'Mapa - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/map');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function notifications(){
        $data['title'] = 'Notificação - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/notifications');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function rtl(){
        $data['title'] = 'RTL - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/rtl');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function tables(){
        $data['title'] = 'Tabelas - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/tables');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function typography(){
        $data['title'] = 'Tipografia - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/typography');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function upgrade(){
        $data['title'] = 'Atualização - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/upgrade');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }

    public function user(){
        $data['title'] = 'Usuário - Painel Admininstrativo';

        // echo '<h1>Testeee</h1>';
        echo view('admin/templates/html-header', $data);
        echo view('admin/templates/header');
        echo view('admin/pages/user');
        echo view('admin/templates/footer');
        echo view('admin/templates/html-footer');
    }
}
