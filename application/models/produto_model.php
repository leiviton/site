<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model
{
	function add($table,$data,$returnId = false){

        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
                        if($returnId == true){
                            return $this->db->insert_id($table);
                        }
			return TRUE;
		}
		
		return FALSE;       
    }
    function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;       
    }
    public function do_delete($condicao=NULL,$redir=TRUE)
	{
		if ($condicao != NULL && is_array($condicao)) {
			$this->db->delete('produto_porta', $condicao);
			if ($this->db->affected_rows()>0) {
				auditoria('Exclusão de porta retrato','Excluido!');
				set_msg('msgok','Exclusão realizada com sucesso!','sucesso');
			} else {
				set_msg('msgerro','Erro ao excluir!','erro');
			}
			
			
			if($redir) redirect(current_url());
		}
	}
    public function get_byid($id=NULL)
	{
		if ($id!=NULL) {
			$this->db->where('idproduto_porta',$id);
			$this->db->limit(1);
			return $this->db->get('produto_porta');
		} else {
			return FALSE;
		}		
	}
	public function get_all_esp()
	{
		return $this->db->get('produto_espelho');
	}
	public function get_all_port()
	{
		return $this->db->get('produto_porta');
	}

	public function get_subesp()
	{
		return $this->db->get('subcategoria');
	}
	public function get_subport()
	{
		return $this->db->get('categoria');
	}
	public function get_subcat()
	{
		return $this->db->get('subcategoria');
	}
	public function count_produto()
	{
		return $this->db->count_all('produto');
	}
}