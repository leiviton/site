<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		init_painel();
		
	}
	public function index()
	{
		$this->gerenciar();
	}
	public function cadastrarP()
	{
		esta_logado();
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema.');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s.');
		$this->form_validation->set_rules('nome','NOME','trim|required|ucwords');
		$this->form_validation->set_rules('descricao','DESCRIÇÃO','trim|required|ucwords');
		
		if($this->form_validation->run()==TRUE){
		    //array de produtos
			$dados = elements(array('nome','descricao','idcategoria'),$this->input->post());
			
			$upload = $this->do_upload('arquivo');
			$dados['img'] = $upload['file_name']; 
			if ( is_numeric($id = $this->produto->add('produto_porta', $dados, true)) ) {
							auditoria('Cadastro de produto','Cadastrado!');
							set_msg('msgok','Cadastro de porta retrato realizado,código do produto '.$id.'!','sucesso'); 
						    redirect('produto/cadastrarP');
						               	
            } else {
                set_msg('msgerro','Erro ao adicionar produto!','erro');
                redirect('produto/cadastrarP');
            }		
        }	
		set_tema('titulo','Cadastro de Porta Retrato');
		set_tema('conteudo', load_modulo('produto','cadastrarP'));
		load_template();
	}
	//editar porta retrato
	public function editarPortaRetrato()	
	{
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema.');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s.');
		$this->form_validation->set_rules('nome','NOME','trim|required|ucwords');
		$this->form_validation->set_rules('descricao','DESCRIÇÃO','trim|required|ucwords');
		if ($this->form_validation->run()==TRUE) {
			//array de produtos
			$dados = elements(array('nome','descricao','idcategoria'),$this->input->post());

			if ($this->produto->edit('produto_porta', $dados, 'idproduto_porta',$this->input->post('idproduto_porta'))==TRUE) {
							auditoria('Cadastro de produto','Cadastrado!');
							set_msg('msgok','Edição de porta retrato realizada!','sucesso'); 
						    redirect(current_url());
						               	
            } else {
                set_msg('msgerro','Erro ao adicionar produto!','erro');
                redirect('produto/cadastrarP');
            }		
        }	
			
		set_tema('titulo','');
		set_tema('conteudo', load_modulo('produto','editarPortaRetrato'));
		load_template();
	}
	public function excluirPortaRetrato()	
	{
		esta_logado();
		
		$idproduto_porta = $this->uri->segment(3);
		if ($idproduto_porta != NULL) {
				$query = $this->produto->get_byid($idproduto_porta);
				if ($query->num_rows()==1) {
					$query = $query->row();
					$this->produto->do_delete(array('idproduto_porta'=>$query->idproduto_porta),FALSE);						
					}else {
						set_msg('msgerro','Produto não pode ser excluido!!!','erro');
					}
					
				} else {
					set_msg('msgerro','Escolha um usuario para excluir!!!','erro');
				}
				
						
			
		
		redirect('produto/gerenciarP');
	}
	public function cadastrarE()
	{
		esta_logado();
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema.');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s.');
		$this->form_validation->set_rules('nome','NOME','trim|required|ucwords');
		$this->form_validation->set_rules('descricao','DESCRIÇÃO','trim|required|ucwords');
		
		if($this->form_validation->run()==TRUE){
		    //array de produtos
			$dados = elements(array('nome','descricao','idcategoria'),$this->input->post());
			
			$upload = $this->do_upload('arquivo');
			$dados['img'] = $upload['file_name']; 
			if ( is_numeric($id = $this->produto->add('produto_espelho', $dados, true)) ) {
							auditoria('Cadastro de produto','Cadastrado!');
							set_msg('msgok','Cadastro de espelho realizado,código do produto '.$id.'!','sucesso'); 
						    redirect('produto/cadastrarE');
						               	
            } else {
                set_msg('msgerro','Erro ao adicionar produto!','erro');
                redirect('produto/cadastrarE');
            }		
        }	
		set_tema('titulo','Cadastro de Espelho');
		set_tema('conteudo', load_modulo('produto','cadastrarE'));
		load_template();
	}
	public function cadastroCategoriaP()
	{
		esta_logado();
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema.');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s.');
		$this->form_validation->set_rules('nomeCategoria','CATEGORIA','trim|required|ucwords');
		
		if($this->form_validation->run()==TRUE){
		    //array de produtos
			$dados = elements(array('nomeCategoria'),$this->input->post());
			
			if ( is_numeric($id = $this->produto->add('categoria', $dados, true)) ) {
							auditoria('Cadastro de categoria','Cadastrado!');
							set_msg('msgok','Cadastro realizado com sucesso, código da categoria '.$id.'!','sucesso'); 
						    redirect('produto/cadastroCategoriaP');
						               	
            } else {
                set_msg('msgerro','Erro ao adicionar categoria!','erro');
                redirect('produto/cadastroCategoriaP');
            }		
        }	
		set_tema('titulo','Cadastro de produto');
		set_tema('conteudo', load_modulo('produto','cadastroCategoriaP'));
		load_template();	
	}
    public function cadastroCategoriaE()
	{
		esta_logado();
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema.');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s.');
		$this->form_validation->set_rules('nomeSubCategoria','CATEGORIA','trim|required|ucwords');
		
		if($this->form_validation->run()==TRUE){
		    //array de produtos
			$dados = elements(array('nomeSubCategoria'),$this->input->post());
			
			if ( is_numeric($id = $this->produto->add('subcategoria', $dados, true)) ) {
							auditoria('Cadastro de categoria espelhos','Cadastrado!');
							set_msg('msgok','Cadastro realizado com sucesso, código da categoria '.$id.'!','sucesso'); 
						    redirect('produto/cadastroCategoriaE');
						               	
            } else {
                set_msg('msgerro','Erro ao adicionar categoria!','erro');
                redirect('produto/cadastroCategoriaE');
            }		
        }	
		set_tema('titulo','Cadastro de produto');
		set_tema('conteudo', load_modulo('produto','cadastroCategoriaE'));
		load_template();	
	}
    
    public function gerenciarP()	
	{
		esta_logado();
		set_tema('titulo','Gerenciar Produtos');
		set_tema('conteudo',load_modulo('produto','gerenciarP'));
		load_template();
	}
	public function editarP()	
	{
		esta_logado();
		$this->form_validation->set_rules('nome','NOME','trim|required|ucwords');
		if ($this->form_validation->run()==TRUE) {
			$dados['nome'] = $this->input->post('nome');
			
		}
		set_tema('titulo','Editar Usuarios');
		set_tema('conteudo', load_modulo('produto','editarP'));
		load_template();
	}
	 public function do_upload($campo)
    {
        $config['upload_path'] = './tema/images/portfolio/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG'; 
        $this->load->library('upload',$config);

        if ($this->upload->do_upload($campo)) {
            return $this->upload->data();       
        } else {
            return $this->upload->display_errors();
        }
        
    }

}