<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Crud extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->model('crud_model','crud');
    }

    public function index(){
        $dados = array(
            'titulo' => 'Crud com Codeigniter',
            'tela' => '',
        );
        $this->load->view('crud', $dados);
    }
    
    public function create(){
        //validação do form
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[50]|ucwords');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|max_length[50]|strtolower|valid_email|is_unique[curso_ci.email]');
        $this->form_validation->set_rules('login', 'LOGIN', 'trim|required|max_length[25]|strtolower|is_unique[curso_ci.login]');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|strtolower');
        $this->form_validation->set_message('matches', 'O Campo %s está diferente do campo %s');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|strtolower|matches[senha]');
        
        if($this->form_validation->run()==true):
            $dados = elements(array('nome','email','login','senha'),$this->input->post());
            $dados['senha'] = md5($dados['senha']);
            $this->crud->do_insert($dados);
        endif;
        
        $dados = array(
            'titulo' => 'Crud &raquo; Create',
            'tela' => 'create',
        );
        $this->load->view('crud', $dados);
    }
    
    public function retrieve(){
        $dados = array(
            'titulo' => 'Crud &raquo; Retrieve',
            'tela' => 'retrieve',
            'usuarios' => $this->crud->get_all()->result(),
        );
        $this->load->view('crud', $dados);
    }
    public function update(){
        //validação do form
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required|max_length[50]|ucwords');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|strtolower');
        $this->form_validation->set_message('matches', 'O Campo %s está diferente do campo %s');
        $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|strtolower|matches[senha]');
        
        if($this->form_validation->run()==true):
            $dados = elements(array('nome','senha'),$this->input->post());
            $dados['senha'] = md5($dados['senha']);
            $this->crud->do_update($dados,array('id'=>$this->input->post('idusuario')));
        endif;
        
        $dados = array(
            'titulo' => 'Crud &raquo; Update',
            'tela' => 'update',
        );
        $this->load->view('crud', $dados);
    }
    public function delete(){
        if($this->input->post('idusuario')>0):
            $this->crud->do_delete(array('id'=>$this->input->post('idusuario')));
        endif;
        $dados = array(
            'titulo' => 'Crud &raquo; Delete',
            'tela' => 'delete',
        );
        $this->load->view('crud', $dados);
    }
}