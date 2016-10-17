<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Sistema {

	protected $CI;
	public $tema = array();

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->helper('funcoes');
	}
	public function enviar_email($para,$assunto,$mensagem,$formato='html',$arquivo=null){
		$this->CI->load->library('email');
		$config['mailtype'] = $formato;
		$this->CI->email->initialize($config);
		$this->CI->email->from('leiviton.silva@direta.com.br','Aministração do sistema Direta Telecom');
		$this->CI->email->to($para);
		if ($arquivo!=null) {
			$this->CI->email->attach($arquivo);
		}
		$this->CI->email->subject($assunto);
		$this->CI->email->message($mensagem);
		if ($this->CI->email->send()) {
			return TRUE;
		} else {
			return $this->CI->email->print_debugger();
		}
	}
}
