<?php
defined('BASEPATH') OR exit('No direct script access allowed');
switch ($tela) {
	  case 'cadastrarP':
	  		?>
	  	<div id="page-wrapper" style="min-height: 270px; margin-top: -30px;">
			<div class="main-page">
				<div class="forms">
				<?php echo breadcrumb();
				erros_validacao();
          		get_msg('msgok');
          		get_msg('msgerro');

          		$idsubcategoria = $this->produto->get_subport()->result();
				 ?>
					<div class="row">
						<h3 class="title1">Cadastro de Porta Retrato:</h3>
						<div class="form-three widget-shadow">
							<?php  echo form_open_multipart('produto/cadastrarP',array('id'=>'demo-form2','class'=>'form-horizontal')); ?>
							<h4>Dados do Produto:</h4>
								<br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-6">
										<input type="text" name="nome" class="form-control1" id="focusedinput" placeholder="Nome Produto" required="">
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Descrição:</label>
									<div class="col-sm-6">
										<input  type='text' name='descricao' class="form-control1" id="descricao" placeholder="Descrição Produto" required="">
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Subcategoria:</label>
									<div class="col-sm-2">
										<select id="categoria" name="idcategoria" class="estado form-control">
											 <?php 												
													foreach($idsubcategoria as $idcat){
														echo '<option value="'.$idcat->idcategoria.'" selected="selected">'.$array[$idcat->idcategoria] = $idcat->nomeCategoria.'</option>';
													}
											?>
	                                     </select>
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Imagem:</label>
									<div class="col-sm-2">
										<input  type='file' name='arquivo' class="" id="arquivo"  required="">
									</div>									
								</div>
								
								<hr>
								        <button type="submit" class="btn btn-success botao">Salvar</button>
								        <?php echo anchor('produto/gerenciar','Cancelar',array('class'=>'btn btn-danger'));?>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
	        $(document).ready(function() {
  					 $("select.estado").select2({
  					 		theme: "classic",
  					 		placeholder: "Selecione",
  							allowClear: false
  					 	 });
  					 
			});
	    </script>
		  		<?php 
	  break;
	  //editar porta retrato
	  case 'editarPortaRetrato':
	  $idproduto_porta = $this->uri->segment(3);
   	  if ($idproduto_porta == NULL) {
      set_msg('msgerro','Escolha um usuário para alterar','erro');
      redirect('produto/gerenciarP');
    }?>
	  		?>
	  	<div id="page-wrapper" style="min-height: 270px; margin-top: -30px;">
			<div class="main-page">
				<div class="forms">
				<?php echo breadcrumb();
				erros_validacao();
          		get_msg('msgok');
          		get_msg('msgerro');

          		$idsubcategoria = $this->produto->get_subport()->result();
          		$query = $this->produto->get_byid($idproduto_porta)->row();
				 ?>
					<div class="row">
						<h3 class="title1">Edição de Porta Retrato:</h3>
						<div class="form-three widget-shadow">
							<?php  echo form_open_multipart(current_url(),array('id'=>'demo-form2','class'=>'form-horizontal')); ?>
							<h4>Dados do Produto:</h4>
								<br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-6">
										<?php 
											echo form_input(array('name'=>'nome','type'=>'text', 'class'=>'form-control1','placeholder'=>'Nome Produto','required'=>'true','id'=>'focusedinput'),set_value('nome',$query->nome),'autofocus');
										 ?>
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Descrição:</label>
									<div class="col-sm-6">
										<?php 
											echo form_input(array('name'=>'descricao','type'=>'text', 'class'=>'form-control1','placeholder'=>'Descrição do Produto','required'=>'true','id'=>'descricao'),set_value('descricao',$query->descricao));
										 ?>
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Subcategoria:</label>
									<div class="col-sm-2">
										<select id="categoria" name="idcategoria" class="estado form-control">
											 <?php 												
													foreach($idsubcategoria as $idcat){
														echo '<option value="'.$query->idcategoria.'" selected="selected">'.$array[$idcat->$query->idcategoria] = $idcat->nomeCategoria.'</option>';
													}
											?>
	                                     </select>
									</div>									
								</div>
								
								<hr>
								<?php  echo form_hidden('idproduto_porta',$idproduto_porta);?> 
								        <button type="submit" class="btn btn-success botao">Salvar</button>
								        <?php echo anchor('produto/gerenciarP','Cancelar',array('class'=>'btn btn-danger'));?>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
	        $(document).ready(function() {
  					 $("select.estado").select2({
  					 		theme: "classic",
  					 		placeholder: "Selecione",
  							allowClear: false
  					 	 });
  					 
			});
	    </script>
		  		<?php 
	  break;
	  
	  case 'cadastrarE':
	  		?>
	  	<div id="page-wrapper" style="min-height: 270px; margin-top: -30px;">
			<div class="main-page">
				<div class="forms">
				<?php echo breadcrumb();
				erros_validacao();
          		get_msg('msgok');
          		get_msg('msgerro');

          		$idsubcategoria = $this->produto->get_subesp()->result();
				 ?>
					<div class="row">
						<h3 class="title1">Cadastro de Espelhos:</h3>
						<div class="form-three widget-shadow">
							<?php  echo form_open_multipart('produto/cadastrarE',array('id'=>'demo-form2','class'=>'form-horizontal')); ?>
							<h4>Dados do Produto:</h4>
								<br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-6">
										<input type="text" name="nome" class="form-control1" id="focusedinput" placeholder="Nome Produto" required="">
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Descrição:</label>
									<div class="col-sm-6">
										<input  type='text' name='descricao' class="form-control1" id="descricao" placeholder="Descrição Produto" required="">
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Subcategoria:</label>
									<div class="col-sm-2">
										<select id="categoria" name="idcategoria" class="estado form-control">
											 <?php 												
													foreach($idsubcategoria as $idcat){
														echo '<option value="'.$idcat->idsubcategoria.'" selected="selected">'.$array[$idcat->idsubcategoria] = $idcat->nomeSubCategoria.'</option>';
													}
											?>
	                                     </select>
									</div>									
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Imagem:</label>
									<div class="col-sm-2">
										<input  type='file' name='arquivo' class="" id="arquivo"  required="">
									</div>									
								</div>
								
								<hr>
								        <button type="submit" class="btn btn-success botao">Salvar</button>
								        <?php echo anchor('produto/gerenciar','Cancelar',array('class'=>'btn btn-danger'));?>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
	        $(document).ready(function() {
  					 $("select.estado").select2({
  					 		theme: "classic",
  					 		placeholder: "Selecione",
  							allowClear: false
  					 	 });
  					 
			});
	    </script>
		  		<?php 
	  break;
	  
	  case 'cadastroCategoriaP':
	  			
	  		?>
	  		<div id="page-wrapper" style="min-height: 270px; margin-top: -30px;">
			<div class="main-page">
				<div class="forms">
				<?php echo breadcrumb();
				erros_validacao();
          		get_msg('msgok');
          		get_msg('msgerro');
          		?>
          	<div class="row">
						<h3 class="title1">Cadastro de subcategoria Porta Retrato:</h3>
						<div class="form-three widget-shadow">
							<?php  echo form_open_multipart('produto/cadastroCategoriaP',array('id'=>'demo-form2','class'=>'form-horizontal')); ?>
							<h4>Dados da Categoria:</h4>
								<br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-6">
										<input type="text" name="nomeCategoria" class="form-control1" id="focusedinput" placeholder="Nome da Categoria" required="">
									</div>									
								</div>
								
								<hr>
								        <button type="submit" class="btn btn-success botao">Salvar</button>
								        <?php echo anchor('produto/gerenciar','Cancelar',array('class'=>'btn btn-danger'));?>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
	  		<?php
	  break;

	  case 'cadastroCategoriaE':
	  			
	  		?>
	  		<div id="page-wrapper" style="min-height: 270px; margin-top: -30px;">
			<div class="main-page">
				<div class="forms">
				<?php echo breadcrumb();
				erros_validacao();
          		get_msg('msgok');
          		get_msg('msgerro');
          		?>
          	<div class="row">
						<h3 class="title1">Cadastro de subcategoria Espelhos:</h3>
						<div class="form-three widget-shadow">
							<?php  echo form_open_multipart('produto/cadastroCategoriaE',array('id'=>'demo-form2','class'=>'form-horizontal')); ?>
							<h4>Dados da Categoria:</h4>
								<br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome:</label>
									<div class="col-sm-6">
										<input type="text" name="nomeSubCategoria" class="form-control1" id="focusedinput" placeholder="Nome da Categoria" required="">
									</div>									
								</div>
								
								<hr>
								        <button type="submit" class="btn btn-success botao">Salvar</button>
								        <?php echo anchor('produto/gerenciar','Cancelar',array('class'=>'btn btn-danger'));?>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
	  		<?php
	  break;
	  case 'gerenciarP':
      ?>
      <div id="page-wrapper" style="min-height: 270px; margin-top: -40px;">
      <?php echo breadcrumb();
				erros_validacao();
          		get_msg('msgok');
          		get_msg('msgerro');?>
          		<h3 class="title1">Gerenciamento de produtos</h3>		
          		<p><?php echo anchor('produto/cadastrarP','Novo Produto',array('class'=>'btn btn-primary add'));?></p>
          	
			<div class="bs-example widget-shadow datadiv" data-example-id="hoverable-table">
			<div class="table-responsive">
				<table class="table table-hover data-table jambo_table" id="example">
                      <thead>
                        <tr>
                          <th>Código:</th>
                          <th>Nome:</th>
                          <th>Descricao:</th>
                          <th>Imagem:</th>
                          <th class="text-center col-sm-2">Categoria:</th>                          
                          <th class="text-center">Ações:</th>  
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $query = $this->produto->get_all_port()->result();
                        foreach ($query as $linha) {
                          echo '<tr>';
                          printf('<td>%s</td>',$linha->idproduto_porta);
                          printf('<td>%s</td>',$linha->nome);
                          printf('<td>%s</td>',resumo_post($linha->descricao,5,false,false));
                          printf('<td>%s</td>',$linha->img);
                          printf('<td class="text-center col-sm-1">%s</td>',$linha->idcategoria);
                          printf('<td class="text-center col-sm-2">%s%s%s</td>',anchor("produto/editarPortaRetrato/$linha->idproduto_porta",'&nbsp;&nbsp;&nbsp;&nbsp;',array('class'=>'fa fa-edit','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Editar')),anchor("produto/excluirPortaRetrato/$linha->idproduto_porta",' ',array('class'=>'glyphicon glyphicon-off','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Excluir')),'');
                          echo '</tr>';
                          }
                         ?>
                      </tbody>
                    </table>
                    </div>
            </div>
        </div>
        <script src="<?php echo base_url("theme"); ?>/js/jquery.dataTables.js"></script>        
        <script src="<?php echo base_url("theme"); ?>/js/dataTables.tableTools.js"></script>
    	<script src="<?php echo base_url("theme"); ?>/js/table.js"></script>

    	
          
      <?php 
  break;
  
	  default:
		echo '<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Tela não existe!
			  </div>';
		break;
}