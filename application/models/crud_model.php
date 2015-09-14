<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model{
    
    public function do_insert($dados=NULL){
        if($dados!=NULL):
            $this->db->insert('curso_ci', $dados);
            $this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso');
            redirect('crud/create');
        endif;
    }
}