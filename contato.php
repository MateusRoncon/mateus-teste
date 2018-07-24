			<!DOCTYPE html>
			
			<?php
			
			include_once("conexão.php");
			
			$consulta = "SELECT * from tb_motorista";
			$consult = mysqli_query($con, $consulta) or die(mysqli_error);
			
			$consulta_p = "SELECT * from tb_passageiro";
			$consult_p = mysqli_query($con, $consulta_p) or die(mysqli_error);
			
			$consulta_c = "SELECT * from tb_corridas";
			$consult_c = mysqli_query($con, $consulta_c) or die(mysqli_error);
			
			
			?>
			
			
			<meta charset="utf-8" />
			<html lang="pt-br">	
				<head>
					<title>TesteWeb</title>
					<meta charset="utf-8">
					<meta name="author" content="Mateus Roncon"/>
					<link rel="stylesheet" type="text/css" href="estilos2.css">
					<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
					<link href="css/bootstrap.min.css" rel="stylesheet">
					
					
				</head>
				
				<body>
				
				
					<div class="header">
						<div class="linha">
							<header>
								<div class="coluna col4">
									<h1 class="logo">Consultar Tabelas //
									<a href="index.php"> Formulários </a>
									</h1>
								</div>
								<div class="coluna col8">
									<nav>
			
									</nav>
							</header>
						</div>
					</div>
					<div class="linha">
					
					
					<div class ="coluna col10">
						<h1> Lista de Motoristas</h1>

						<div class = "row">
						<div class ="col-md-12">
						
						<table class ="table table-bordered">
						<thead>
						<tr>
							
							<td>Nome</td>
							<td>Data de Nascimento</td>
							<td>CPF</td>
							<td>Modelo do Carro</td>
							<td>Status</td>
							<td>Sexo</td>
						</tr>
						</thead>
						<tbody>
						
						<?php while($dado= mysqli_fetch_assoc($consult)){ ?>
						
						<tr>
							
							<td><?php echo $dado["nome"]; ?></td>
							<td><?php echo $dado["data_nasci"]; ?></td>
							<td><?php echo $dado["cpf"]; ?></td>
							<td><?php echo $dado["modelo_carro"]; ?></td>
							<td><?php echo $dado["status"]; ?></td>
							<td><?php echo $dado["sexo"]; ?></td>
							<td><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $dado["status"]; ?>"data-whateverid="<?php echo $dado["id_motoristas"]; ?>">Editar</button></td>
						</tr>
						<?php } ?>
						
						</tbody>
						</table>
					</div>
					</div>	
					</div>	
					

						
						
						<div class ="coluna col10 contato">
						<h1> Lista de Passageiros</h1>
					
						<div class = "row">
						<div class ="col-md-12">
						
						<table class ="table table-bordered">
						<thead>
						<tr>
							
							<td>Nome</td>
							<td>Data de Nascimento</td>
							<td>CPF</td>
							<td>Sexo</td>
						</tr>
						</thead>
						<tbody>
						
						<?php while($dado_p= mysqli_fetch_assoc($consult_p)){ ?>
						
						<tr>
							
							<td><?php echo $dado_p["nome_p"]; ?></td>
							<td><?php echo $dado_p["data_p"]; ?></td>
							<td><?php echo $dado_p["cpf_p"]; ?></td>
							<td><?php echo $dado_p["sexo_p"]; ?></td>
						</tr>
						<?php } ?>
						
						</tbody>
						</table>
					</div>
					</div>	
					</div>
							
								
								<div class ="coluna col10">
						<h1> Lista de Corridas</h1>
					
						<div class = "row">
						<div class ="col-md-12">
						
						<table class ="table table-bordered">
						<thead>
						<tr>
							
							<td>Motorista</td>
							<td>Passageiro</td>
							<td>Valor da corrida</td>
							
						</tr>
						</thead>
						<tbody>
						
						
						
						
						<?php while($dado_p= mysqli_fetch_assoc($consult_c)){ ?>
						<tr>
							
							
							<td><?php echo $dado_p["nome_motorista"]; ?></td>

							<td><?php echo $dado_p["nome_passageiro"]; ?></td>
						
							<td><?php echo $dado_p["valor_corrida"]; ?></td>
							<?php } ?>
						</tr>

						</tbody>
						</table>
					</div>
					</div>	
					</div>
								
								
						
					</div>
					
					


					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="exampleModalLabel">Status do motorista</h4>
						  </div>
						  <div class="modal-body">
							<form method="POST" action ="processa.php" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="recipient-name" class="control-label">Status:</label>
										Ativo
										<input id = "status" name="status" type="radio" value="Ativo">     
										Inativo 
										<input id = "status" name="status" type="radio" value="Inativo"><br></br>
								<input name = "id_m" type="hidden" id="id_m">
							  </div>
							
							  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-danger">Alterar</button>
						  </div>
							</form>
						  </div>
						  
						</div>
					  </div>
		</div>
		
		
					
					
					
					<section>
				<div class="conteudo-extra"></div>
					<div class="linha footer">

									<span>&copy; 2018</span>

						</div>
					</div>
			</section>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

			<script src="js/bootstrap.min.js"></script>
			
			
			<script type="text/javascript">
					$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever')
		  var recipientID = button.data('whateverid')		  // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('Status do Motorista: ' + recipient)
		  modal.find('#recipient').val(recipient)
		  modal.find('#id_m').val(recipientID)
		})
		</script>
		
		
		
				</body>
			
			
			</html>
			