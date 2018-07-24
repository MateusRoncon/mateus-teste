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
					<link rel="stylesheet" type="text/css" href="estilos.css">
					<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
					<link href="css/bootstrap.min.css" rel="stylesheet">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" type="text/javascript"></script>
					<script src="js/bootstrap.min.js"></script>
					
			
			<script language="javascript" type="text/javascript">
			
					$(function() {
						  $('[type=money]').maskMoney({
							thousands: '.',
							decimal: ','
						  });
						})
					
						function redireciona(){

						window.open('cadastro_motorista.php');
						location.href = "index.php";

						return true;

										}

				
					function validaForm(frm) {

					
				
					if(frm.Nome.value == "" || frm.Nome.value == null || frm.Nome.value.lenght < 3) {
					
					alert("Por favor, indique o seu nome.");
				
					frm.Nome.focus();
				
					return false;
					
					}
						
					if(frm.Data_nasc.value == "" || frm.Data_nasc.value == null || frm.Data_nasc.value.lenght < 3)
					{
					alert("Por favor, indique o sua data de nascimento.");
					frm.Data_nasc.focus()			
					return false;
					}
					
					
					if(frm.cpf.value.length < 14 )
					{
						
					alert("Por favor, insira seu CPF completo.");
					frm.cpf.focus()			
					return false;
					
					}
					
					if(frm.Modelo.value == "" || frm.Modelo.value == null || frm.Modelo.value.lenght < 3) {
					
					alert("Por favor, indique o modelo do carro.");
				
					frm.Modelo.focus();
				
					return false;
					
					}
					
					if(frm.status[0].checked == false && frm.status[1].checked == false){
						
					alert("Por favor, indique o seu status.");
					return false;
						
					}
					
					if(frm.Sexo[0].checked == false && frm.Sexo[1].checked == false){
						
					alert("Por favor, indique o seu Sexo.");
					return false;
						
					}
					
					
					return true;
					
					}
					
					function validaForm2(frm) {
					
					if(frm.Nome2.value == "" || frm.Nome2.value == null || frm.Nome2.value.lenght < 3) 
					{
					
					alert("Por favor, indique o seu nome.");
				
					frm.Nome2.focus();
				
					return false;
					
					}
					
					if(frm.Data_nasc2.value == "" || frm.Data_nasc2.value == null || frm.Data_nasc2.value.lenght < 3)
					{
					alert("Por favor, indique o sua data de nascimento.");
					
					frm.Data_nasc2.focus();
					
					return false;
					}
					
					
					if(frm.cpf2.value.length < 14 )
					{
						
					alert("Por favor, insira seu CPF completo.");
					frm.cpf2.focus();
					
					return false;
					
					}
					
					if(frm.Sexo2[0].checked == false && frm.Sexo2[1].checked == false)
					{
						
					alert("Por favor, indique o seu Sexo.");
					return false;
						
					}
					
					return true;
					}
					
					
					function validaForm3(frm) {
					
					if(document.form3.motorista.options[motorista.selectedIndex].value =="nada" ) 
					{
					
					alert("Por favor, indique o nome do motorista.");
					frm.motorista.focus();
						
					return false;
					
					}
					
					if(document.form3.passageiro.options[passageiro.selectedIndex].value =="nada")
					{
					alert("Por favor, indique o nome do passageiro");
					frm.passageiro.focus();
					return false;
					}
					
					
					if(frm.valor.value == "" || frm.valor.value == "NaN" || frm.valor.value < 5  )
					{
						
					alert("Por favor, insira o valor da corrida.");
					frm.valor.focus();
					
					return false;
					
					}
				
					
					return true;
					}
					
					

						function formatar(mascara, documento){
						  var i = documento.value.length;
						  var saida = mascara.substring(0,1);
						  var texto = mascara.substring(i)
						  
						  if (texto.substring(0,1) != saida){
									documento.value += texto.substring(0,1);
						  }
						  

						}
						
			

						</script>
				</head>
				
				<body>
				
				
					<div class="header">
						<div class="linha">
							<header>
								<div class="coluna col4">
									<h1 class="logo">Formulários   //           
									<a href="contato.php">Consultar tabelas &raquo</a>
									</h1>
									
								</div>
								<div class="coluna col8">
									<nav>
			
									</nav>
							</header>
						</div>
					</div>
					<div class="linha">
					
					
						
							
							<div class="coluna col7 contato">
								<h2>Cadastro Motorista</h2>	
								<form method="POST"  action="cadastro_motorista.php" name="form1" onsubmit="return validaForm(this);" >
								
									<label for="nome">Nome:</label>
										<input id="nome" type="text" placeholder="Digite seu nome" name="Nome" />
			
									<label for="data">Data de Nascimento:</label>
										<input id="data_nasc" type="date" name="Data_nasc" />
			
									<label for="cpf">CPF:</label>
										<input id="cpf" type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this);"  />
			
			
									<label for="modelo">Modelo do carro:</label>
										<input id="modelo" type="text" placeholder="Modelo do carro" name="Modelo" />
			
									
									<br>
									</div>
									<div class="col7">
									<label for="status"> Status:</label>
									
										Ativo
										<input id = "status" name="status" type="radio" value="Ativo">     
										Inativo 
										<input id = "status" name="status" type="radio" value="Inativo"><br></br>
									
									
										 <label for="sexo">Sexo:</label>
										 Masculino
										 <input id="sexo" type="radio" name="Sexo" value="masculino" />
										 Feminino
										<input id="sexo" type="radio" name="Sexo" value="feminino" />
					
									
									</div>
									
									</h3>
									<br>
										<br>
			
									<input type="submit" class="botao" name="enviar" value="Cadastrar Motorista &raquo;" onsubmit="return redireciona();"/>
									 
							
								</form>
							
						</section>
						<br>
						<br>
						<br>
						
						<div class="coluna col7 contato">
								<h2>Cadastro passageiros</h2>	
								<form action="cadastro_passageiro.php" method="POST" onsubmit="return validaForm2(this);">
									<label for="nome">Nome:</label>
										<input id="nome2" type="text" placeholder="Digite seu nome" name="Nome2" />
			
									<label for="data">Data de Nascimento:</label>
										<input id="data_nasc2" type="date" name="Data_nasc2" />
			
									<label for="cpf">CPF:</label>
										<input id="cpf2" type="text" name="cpf2" maxlength="14" OnKeyPress="formatar('###.###.###-##', this);"/> 	
				
									</div>
									
									<div class = "col1">
									
									
										 <label for="sexo">Sexo:</label>
										 Masculino
										 <input id="sexo" type="radio" name="Sexo2" value="masculino" />
										 Feminino
										<input id="sexo" type="radio" name="Sexo2" value="feminino" />
										
									
									
									</div>
									
									</h3>
									<br>
									<br>
			
									<input type="submit" class="botao" name="enviar" value="Cadastrar Passageiro &raquo;"/>
									<br>
									<br>
									<br>
									<br>
								
								</form>
						<section>
						
							<section>

						
								
								
								<div class="coluna col1 contato">
								
								<h2>Cadastro Corridas</h2>	
								
								<form name="form3" action="cadastro_corrida.php" method="POST" onsubmit="return validaForm3(this);">
								
								
									<label for="nome">Nome do motorista:</label>
									
										<select name="motorista" id = "motorista">
										<option value ="nada">Selecione</option>
										
										
										<?php
											$chama_moto =	"SELECT * from tb_motorista WHERE status = 'Ativo'";
											$consult_moto = mysqli_query($con, $chama_moto) or die(mysqli_error);
											while($dado_m= mysqli_fetch_assoc($consult_moto)){ ?>

											<option value="<?php echo $dado_m["nome"]; ?>"><?php echo $dado_m["nome"]; ?></option>
										<?php } ?>
										</select>
										
								<br>
								<br>
									<label for="data">Nome do passageiro:</label>
										<select name="passageiro" id = "passageiro">
										<option value ="nada">Selecione</option>
			
										<?php
											$chama_passa =	"SELECT * from tb_passageiro";
											$consult_passa = mysqli_query($con, $chama_passa) or die(mysqli_error);
											while($dado_passa= mysqli_fetch_assoc($consult_passa)){ ?>

											<option value="<?php echo $dado_passa["nome_p"]; ?>"><?php echo $dado_passa["nome_p"]; ?></option>
										<?php } ?>
										
										
										
										</select>
										
										<br>
										<br>
									<label for="valor">Valor da corrida:</label>
										<input id="valor" type="money" name="valor" placeholder="R$:" />	
				
									
									</div>
									
									
									
									</h3>

									<br>
			
									<input type="submit" class="botao" name="enviar" value="Cadastrar Corrida &raquo;" onClick="formatarMoeda()"   />
									<br>
									<br>
									<br>
									<br>
							
							
							
								</form>
								
								
					
						</section>
						
						
						
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
			
			
			
			
		
		
		
				</body>
			
			
			</html>
