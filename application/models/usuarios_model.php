<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
	public function do_insert($dados=NULL,$redir=TRUE)
	{
		if ($dados != NULL) {
			$this->db->insert('usuarios',$dados);
			if ($this->db->affected_rows()>0) {
				auditoria('Cadastro de usuario',$dados['login'].'Cadastrado!');
				set_msg('msgok','Cadastro efetuado com sucesso!','sucesso');
			} else {
				set_msg('msgerro','Erro ao adicionar!','erro');
			}
			
			if($redir) redirect(current_url());
		}
	}
	public function do_update($dados=NULL,$condicao=NULL,$redir=TRUE)
	{
		if ($dados != NULL && is_array($condicao)) {
			$this->db->update('usuarios', $dados, $condicao);
			if ($this->db->affected_rows()>0) {
				auditoria('Atualização de usuario','Atualização de'.$dados.'!');
				set_msg('msgok','Alteração realizada com sucesso!','sucesso');
			
			} else {
				set_msg('msgerro','Erro ao atualizar!','erro');
			}
			if($redir) redirect(current_url());
		}
	}
	public function do_delete($condicao=NULL,$redir=TRUE)
	{
		if ($condicao != NULL && is_array($condicao)) {
			$this->db->delete('usuarios', $condicao);
			if ($this->db->affected_rows()>0) {
				auditoria('Exclusão de usuario','Excluido!');
				set_msg('msgok','Exclusão realizada com sucesso!','sucesso');
			} else {
				set_msg('msgerro','Erro ao excluir!','erro');
			}
			
			
			if($redir) redirect(current_url());
		}
	}
	public function do_login($usuario=NULL,$senha=NULL)
	{
		if ($usuario && $senha) {
			$this->db->where('login', $usuario);
			$this->db->where('senha', $senha);
            $this->db->where('ativo', 1);

			$query = $this->db->get('usuarios');	
			if ($query->num_rows() == 1) {
				return TRUE;
			} else {
				return FALSE;
			}
			
		} else {
		 	return FALSE;
		}
		
	}
	public function get_bylogin($login=NULL)
	{
		if ($login!=NULL) {
			$this->db->where('login',$login);
			$this->db->limit(1);
			return $this->db->get('usuarios');
		} else {
			return FALSE;
		}		
	}
	public function get_byemail($email=NULL)
	{
		if ($email!=NULL) {
			$this->db->where('email',$email);
			$this->db->limit(1);
			return $this->db->get('usuarios');
		} else {
			return FALSE;
		}		
	}

	public function get_byid($id=NULL)
	{
		if ($id!=NULL) {
			$this->db->where('idusuarios',$id);
			$this->db->limit(1);
			return $this->db->get('usuarios');
		} else {
			return FALSE;
		}		
	}
	public function get_ativo()
	{
		$this->db->where('ativo',1);
		return $this->db->get('usuarios');
	}
	public function get_inativo()
	{
		$this->db->where('ativo',0);
		return $this->db->get('usuarios');
	}
	public function count_usuarios()
	{
		return $this->db->count_all('usuarios');
	}
	public function recuperar_senha()
	{
		$email = $this->input->post('email');

		$consulta = $this->db->get_where('usuarios', array('email'=>$email));
			if ($consulta->num_rows() == 1) {
				return TRUE;
			} else {
				return FALSE;
			}
	}
	public function grava_chave($chave='',$email='')
	{
		if ($this->db->insert('recuperar_senha', array('chave'=>$chave,'email'=>$email))) {
			return TRUE;	
		}
		else{
			return FALSE;
		}
	}
	public function verifica_chave($chave='')
	{
		$this->db->where('TIMESTAMPDIFF(MINUTE,data, now()) <= 120');
		$consulta = $this->db->get_where('recuperar_senha', array('chave'=>$chave));
		if ($consulta->num_rows()==1) {
			return TRUE;
		} else {
			return FALSE;
		}		
	}
	public function salvar_senha_alterada($dados=NULL,$chave='')
	{		
		if ($dados != NULL && $chave != NULL) {
			$email = $this->db->get_where('recuperar_senha',array('chave'=>$chave))->row()->email;

			$query = $this->db->where('email',$email)->update('usuarios',$dados);

			if ($query) {
				return TRUE;
			} else {
				return FALSE;
			}			
		}
	}
}