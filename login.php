			<!DOCTYPE html>
			
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
			
					//Esta função não possui segurança alguma. Porém, serve como uma pequena barreira para restringir algum acesso, mesmo que fosse minimo.
					
					
					function validaForm(frm) {
					
					if(document.form1.usr.value =="" ) 
					{
					
					alert("Por favor, indique o username.");
					frm.usr.focus();
						
					return false;
					
					}
					
					
					if(frm.psw.value == "" )
					{
						
					alert("Por favor, insira a senha.");
					frm.psw.focus();
					
					return false;
					
					}
					
					if(frm.usr.value == "UsuarioTeste")
					{
						return true;
					}
				
					if(frm.psw.value == "teste123")
					{
						return true;
					}
				
					alert("Login inválido, cheque as informações");
			
					}
					
					

						</script>
				</head>
				
				<body>
				
				
					<div class="header">
						<div class="linha">
							<header>
								<div class="coluna col4">
									<h1 class="logo">Login  //           
									
									</h1>
									
								</div>
								<div class="coluna col8">
									<nav>
			
									</nav>
							</header>
						</div>
					</div>
			
					
					
			
							<div class="coluna col5 contato">
					
								<form method="POST" name="form1" onsubmit="return validaForm(this);" action="index.php" >
								
									<label for="nome">Username:</label>
										<input id="usr" type="text" placeholder="Digite seu username" name="usr" />
			
									<label for="data">Password:</label>
										<input id="psw" type="password" name="psw" placeholder="Digite sua senha" />
	
									
									
									
									</div>
									
									<div class="col5">
									<input type="submit" class="botao" name="enviar" value="Entrar &raquo;" onsubmit="return redireciona();"/>
						</div>
						
		
					

				</body>
			
			
			</html>
