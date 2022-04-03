<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\GenerosMusicaisModel;

class Generos_musicais extends Controller{
    public function index(){

        $model_generos_musicais = new GenerosMusicaisModel();

        $data = array(
            'title' => 'Gêneros Musicais',
            'generos_musicais' => $model_generos_musicais->getGenerosMusicais()
        );
        $data['title'] = 'Gêneros Musicais';
        $data['msg'] = '';

        echo view('user/templates/html-header',$data);
        echo view('user/templates/header');
        echo view('user/pages/generos_musicais',$data);
        echo view('user/templates/footer');
        echo view('user/templates/html-footer');
    }

    public function save(){

        $model_generos_musicais = new GenerosMusicaisModel();

        helper('form');

        $data = array(
            'title' => 'Gêneros Musicais',
        );

        if(!$this->validate([
            'nome' => ['label' => 'Nome', 'rules' => 'required|min_length[2]|max_length[30]']
        ])){

            $data['msg'] = 'Erro ao cadastrar Gênero Musical';
            $data['generos_musicais'] = $model_generos_musicais->getGenerosMusicais();

            echo view('user/templates/html-header',$data);
            echo view('user/templates/header');
            echo view('user/pages/generos_musicais', $data);
            echo view('user/templates/footer');
            echo view('user/templates/html-footer');
        }

        $nomeGeneroMusical = $this->request->getVar('nome');

        $model_generos_musicais->save([
            'nome' => $nomeGeneroMusical
        ]);

        $data['msg'] = 'Gênero musical criado!';
        $data['generos_musicais'] = $model_generos_musicais->getGenerosMusicais();

        echo view('user/templates/html-header',$data);
        echo view('user/templates/header');
        echo view('user/pages/generos_musicais', $data);
        echo view('user/templates/footer');
        echo view('user/templates/html-footer');

    }
}