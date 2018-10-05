<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')){
            redirect('login');
        } else if($this->session->userdata('logado')->perfilAcesso=="USER"){
            redirect('home');
        }
        $this->load->model('Usuario_model', 'usuario');
        $this->load->model('Usuario_model', 'usuario');
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "Meu Projeto Framework";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['usuario'] = $this->usuario->listar();
        $dados['usuario'] = $this->usuario->listar();
        $this->load->view('usuario', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nomeusuario'] = mb_convert_case ($this->input->post ('nomeusuario'), MB_CASE_UPPER);
        $dados['user'] = mb_convert_case ($this->input->post ('user'), MB_CASE_LOWER);
        $dados['senha'] = md5($this->input->post('senha'));
        $dados['perfilAcesso'] = mb_convert_case ($this->input->post ('perfilAcesso'), MB_CASE_UPPER);
        $Result = $this->usuario->inserir($dados);
        
        if ($Result == true) {
            $this->session->set_flashdata('sucesso' , 'msg');
        redirect('usuario');
    } else { 
            $this->session->set_flashdata('falha' , 'msg');
        redirect('usuario');

    }
    }
    
    public function deletar($id) {
        $Result=$this->usuario->deletar($id);
        if ($Result == true) {
            $this->session->set_flashdata('excluirS', 'msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('usuario');
        }
    }

    public function editar($id) {
        $data['acronico'] = "Felipe";
        $data['completo'] = "Felipe Souza";
        $data['usuarioEditar'] = $this->usuario->editar($id);
        $this->load->view('template/header');
        $this->load->view('usuarioEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['idusuario'] = $this->input->post('idusuario');
        $data['nomeusuario'] = mb_convert_case ($this->input->post ('nomeusuario'), MB_CASE_UPPER);
        $data['user'] = mb_convert_case ($this->input->post ('user'), MB_CASE_LOWER);
        $data['perfilAcesso'] = mb_convert_case ($this->input->post ('perfilAcesso'), MB_CASE_UPPER);
        $Result=$this->usuario->atualizar($data);
        if ($Result == true) {
            $this->session->set_flashdata('sucessoA', 'msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('usuario');
        }
    }

}
