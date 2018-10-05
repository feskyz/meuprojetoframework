<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcao extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')){
            redirect('login');
        } else if($this->session->userdata('logado')->perfilAcesso=="USER"){
            redirect('home');
        }
        $this->load->model('Funcao_model', 'funcao');
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "Preencha com seus dados";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('funcao', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
            $dados['nomefuncao'] = $this->input->post('nomefuncao');
        $result = $this->funcao->inserir($dados);
                 if ($result == true) {
            $this->session->set_flashdata('sucesso', 'msg');
        redirect('funcao');
        } else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('funcao');
        }
    }

    public function deletar($id) {
         $Result=$this->funcao->deletar($id);
       if ($Result == true) {
            $this->session->set_flashdata('excluirS' , 'msg');
        redirect('funcao');
    } else { 
            $this->session->set_flashdata('excluirF' , 'msg');
        redirect('funcao');
    }
    }

    public function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "Felipe";
        $data['completo'] = "Felipe Souza";
        $data['funcaoEditar'] = $this->funcao->editar($id);
        $this->load->view('funcaoEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['idfuncao'] = $this->input->post('idfuncao');
        $data['nomefuncao'] = $this->input->post('nomefuncao');
        $Result=$this->funcao->atualizar($data);
        if ($Result == true) {
            $this->session->set_flashdata('sucessoA' , 'msg');
        redirect('funcao');
    } else { 
            $this->session->set_flashdata('falhaA' , 'msg');
        redirect('funcao');
    }
    }
}