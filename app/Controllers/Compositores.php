<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\CompositoresModel;
use App\Models\GenerosMusicaisModel;

class Compositores extends Controller{
    public function index()
    {
        $compositores_model = new CompositoresModel();
        $generos_musicais_model = new GenerosMusicaisModel();

        $data['title'] = 'Compositores';
        $data['msg'] = '';
        // TODO: ADICIONAR PAGINATOR
        $data['compositores'] = $compositores_model->getCompositores();
        $data['generos_musicais'] = $generos_musicais_model->getGenerosMusicais();

        echo view('user/templates/html-header', $data);
        echo view('user/templates/header');
        echo view('user/pages/compositores', $data);
        echo view('user/templates/footer');
        echo view('user/templates/html-footer');

    }

    public function save(){

        $compositores_model = new CompositoresModel();
        $generos_musicais_model = new GenerosMusicaisModel();


        helper('form');
        /**
         * Verifica a validade 
         * do nome, descrição e id do gênero músical
         */
        if(!$this->validate([
            'nome' => ['label' => 'Nome', 'rules' => 'required|min_length[2]|max_length[100]'],
            'descricao' => ['label' => 'Descrição', 'rules' => 'required|min_length[5]|max_length[500]'],
            'id_genero_musical' => ['label' => 'Gênero Musical', 'rules' => 'required']
        ])){

            $data = [
                'title' => 'Compositores',
                'compositores' => $compositores_model->getCompositores(),
                'msg' => 'Erro ao cadastrar Notícia!',
                'generos_musicais' => $generos_musicais_model->getGenerosMusicais(),
            ];

            echo view('user/templates/html-header',$data);
            echo view('user/templates/header');
            echo view('user/pages/compositores', $data);
            echo view('user/templates/footer');
            echo view('user/templates/html-footer');
            return 0;

        }

        $id = $this->request->getVar('id');
        $nomeCompositor = $this->request->getVar('nome');
        $descricaoCompositor = $this->request->getVar('descricao');
        $idGeneroMusical = $this->request->getVar('id_genero_musical');
        $avatar = $this->request->getFile('avatar_img');
        $background = $this->request->getFile('background_img');

        // Constrói o array para salvar no banco de dados
        $arraySave = array(
            'id' => $id,
            'nome' => $nomeCompositor,
            'descricao' => $descricaoCompositor,
            'id_genero_musical' => $idGeneroMusical,
        );

        $mensagemErro = '';


        // Verifica se é valido a imagem do avatar
        if($avatar->isValid()){
            $validacaoAvatar = $this->validate([
                'avatar_img' => [
                    'uploaded[avatar_img]',
                    'mime_in[avatar_img,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[avatar_img,4096]',
                ],
            ]);

            if($validacaoAvatar){
                $novoNomeImagem = $avatar->getRandomName();

                $avatar->move('musics/avatar', $novoNomeImagem);

                $arraySave['avatar_img'] = $novoNomeImagem;
            } else {
                $mensagemErro = 'Erro ao inserir imagem do background';
            }
        }

        //Verifica se é valido a imagem do background
        if($background->isValid()){

            $validacaoBackground = $this->validate([
                'background_img' => [
                    'uploaded[background_img]',
                    'mime_in[img,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[img,4096]',
                ],
            ]);

            if($validacaoBackground){
                $novoNomeImagem = $background->getRandomName();

                $background->move('musics/background', $novoNomeImagem);

                $arraySave['background_img'] = $novoNomeImagem;
            } else {
                $mensagemErro = 'Erro ao inserir imagem do background';
            }
        }

        /**
         * Verifica se tem mensagem de erro
         * ao salvar background imagem
         * e avatar imagem
         */
        if(!empty($mensagemErro)){
            $data = [
                'title' => 'Compositores',
                'compositores' => $compositores_model->getCompositores(),
                'msg' => $mensagemErro,
                'generos_musicais' => $generos_musicais_model->getGenerosMusicais(),
            ];

            echo view('user/templates/html-header',$data);
            echo view('user/templates/header');
            echo view('user/pages/compositores', $data);
            echo view('user/templates/footer');
            echo view('user/templates/html-footer');
        } 

        $compositores_model->save($arraySave);

        $data = [
            'title' => 'Compositores',
            'compositores' => $compositores_model->getCompositores(),
            'msg' => 'Compositor criado!'.var_dump($arraySave),
            'generos_musicais' => $generos_musicais_model->getGenerosMusicais(),
        ];

        echo view('user/templates/html-header',$data);
        echo view('user/templates/header');
        echo view('user/pages/compositores', $data);
        echo view('user/templates/footer');
        echo view('user/templates/html-footer');

    }
}