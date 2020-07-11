<?php
	session_start();
	require_once '../Classes/usuario.php';
	//require_once '../Classes/produtos.php';


	if($_SESSION ['id_usuario'] == true){
		$estado = $_SESSION["email"];
	}
	else{
		$estado = "Não logado";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fast Shopping</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="sortcut icon" href="../img/favicon.png" type="../image/png" />
	<link rel="stylesheet" href="../bootstrap/4.1.3/css/bootstrap.min.css">

	<script type="text/javascript" src="../jQuery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../JS/menu.js"></script>
	<script src="../bootstrap/4.1.3/js/bootstrap.bundle.js"></script>
</head>



<body>

	<div class="container-fluid">

		<!--<div class="row justify-content-beetween">
			<div class="col-sm-4">
				<img src="img/S.png" class="img-fluid">
			</div>
			<form class="form-inline">
				<input class="form-control mr-2 "  type="search" placeholder="pesquisar produto...">
				<button class="btn btn-outline-light mr-2" type="sumit">Pesquisar</button>
			</form>
		</div>-->


		<!--CABEÇALHO-->
		<nav class="navbar-expand-lg navbar-dark"  style="background-color: #46b7bf">

			<a class="navbar-brand" href="../index.php">
				<img src="../img/S.png" alt="logo" class="img-fluid">
				<h5 class="nomo_loja ml-3 mb-0">Fast Shopping</h5>					
			</a>
			

			<!--botao de Sair -->
			<button type="button" class="btnLog btn-light mt-3 mr-2">
				<?php
					//unset($_SESSION ['id_usuario'])
				?>
				<style type="text/css">
					a:link{
						text-decoration: none;
					}
				</style>
				<a href="../index.php">Sair</a>
			</button>

			<!--botao de Login-->
			<button type="button" class="btnLog btn-light mt-3 mr-2" >
				<a href="login.php"> 
					<?php
						echo "Login";
					?>
				</a>
			</button>
			
			<!-- mensagem com o email-->
			<div class="Msgemail">
			<?php echo $estado?>
			</div>
	<form class="form-inline ">
    			<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar">
   				<button class="btn btn-btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
  			</form>
			
			<!--botao de pesquisar
			<nav class="navbar navbar-dark" style="background-color: #46b7bf">
  				<form class="form-inline mx-auto">
    				<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar">
   					<button class="btn btn-btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
  				</form>
			</nav>-->

			<!--botao dos menu-->
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      			<span class="navbar-toggler-icon"></span>
    		</button>
  		

			<div class="collapse navbar-collapse" id="navbarSite" style="background-color: #46b7bf">

				<ul class="navbar-nav ml-auto ">
					<li class="nav-item">
						<a class="nav-link" href="#">Meus pedidos</a>
					</li>
	
					 <li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" cid="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Produtos
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="celulares.html">Celulares</a>
          					<a class="dropdown-item" href="Notebooks.html">Nootebooks</a>
          					<a class="dropdown-item" href="acessorios.html	">Acessorios</a>
        				</div>
      				</li>
	
					<li class="nav-item">
						<a class="nav-link" href="sobre.html">Sobre a loja</a>
					</li>
				</ul>
			</div>
		</nav>

		<!--JANELA DE LOGIN
			<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="ModCenter" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="ModCenter">Login</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Endereço de email</label>
									<input type="email" class="form-control" placeholder="Seu email">
								</div>
								<div class="form-group">
									<label>Senha</label>
									<input type="password" class="form-control" placeholder="Senha">
								</div>
							</form>
						</div>
						<div class="modal-footer">
							    <button type="button" class=" mr-auto btn btn-link">Cadastrar-me</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								<button type="button" class="btn btn-primary">Confirmar</button>
						</div>
					</div>
				</div>
			</div>	
-->
			<div class="mt-4 text-center">
				<img src="../img/odysei.jpg" alt="logo" class="img-fluid">
			</div>

			<div class="row mb-5 mt-4">
				<div class="col-lg-8 col-md-10 col-sm-12 mb-12 mx-auto"> 
					<div class="card ">
						<div class="card-body">
							<h5>Notebook gamer samsung odyssey</h5>
							Marca: Samsung<br>
							Memoria RAM: 16 GB(Ram)<br> 
							Memoria Interna: 1TB (HD)<br>
							Placa de Video: GeForce gtx1050 4GB<br>
							Processador: intel core i7<br>
							Velocidade do Processador: até 4,2 GHz ou 4,3 GHz<br>
							Altura: 17.9 mm<br>
							Largura: 375,6 mm<br>
							Profundidade: 255 mm<br>
							Peso: 2,4 kg<br>
							Entradas e saídas: USB-C (1), USB 3.0 (2), USB 2.0 (1), HDMI e Ethernet<br>
							Sensores: Wi-Fi AC e Bluetooth<br>
							<?php print_r($preco); ?> 

							<button type="submit" class="btn btn-outline-info">
								<div>
									<a href="compranotegamer.php">Comprar</a>
								</div>
							</button>
							
							<!--<?php 
							if($_SESSION ['id_usuario'] == false)
							{
								?>
								<div>
									<p>Não logado, Faça Login para continuar
									<a href="login.php">Clique aqui!</a></p>
								</div>
								<?php
							}
							else
							{
								?>
																<?php
							}
							?>-->

						</div>
					</div>
				</div>
			</div>

	</div>
</body>