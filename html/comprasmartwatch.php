<!DOCTYPE html>
<html>
<head>
	<title>Fast Shopping</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/compra.css">v
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
		<nav class="navbar-expand-lg navbar-dark" style="background-color: #46b7bf">

			<a class="navbar-brand" href="../index.php">
				<img src="../img/S.png" alt="logo" class="img-fluid">
				<h5 class="nomo_loja ml-3 mb-0">Fast Shopping</h5>					
			</a>
			

			<!--botao de login-->
			<button type="button" class="btnLog btn-light mt-3 mr-2" >
			<a href="login.php">Login/ Cadastro</a></button>

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
  		

			<div class="collapse navbar-collapse" id="navbarSite">

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
          					<a class="dropdown-item" href="acessorios.html">Acessorios</a>
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
				<img src="../img/smartch watch sansung.jpg" alt="logo" class="img-fluid">
			</div>

			<div class="row mb-5 mt-4 mx-auto">
				<div class="col-lg-8 col-md-10 col-sm-12 mb-12 mx-auto"> 
					<div class="card ">
						<div class="card-body mx-auto">
							<h5>Comprar</h5>
							<label>Nome: </label><br>
							<input type="text" id="User" name="Name" placeholder="Insira seu nome"/>
							<label>RG: </label><br>
							<input type="" id="User" name="Name" placeholder="Insira seu RG"/>
							<label>CPF: <input type="text" id="User" name="Name" placeholder="Insira seu CPF" /></label><br>
							<label>Numero do cartão: <input type="text" id="User" name="Name" placeholder="0000 0000 0000 0000" /></label><br>
							<label>Contato: <input type="text" id="User" name="Name" placeholder="+55 (11)0000-0000"/></label><br><br>
							<h5>Endereço</h5>
							<label>CEP: <input type="text" id="User" name="Name" placeholder="Insira seu CEP"/></label><br>
							<label>Logradouro: <input type="text" id="User" name="Name" placeholder="Rua, Estrada, Alameda"/></label><br>
							<label>Bairro: <input type="text" id="User" name="Name" placeholder="Insira seu bairro"/></label><br>
							<label>Cidade: <input type="text" id="User" name="Name" placeholder="Insira sua cidade"/></label><br>
							<label>UF: <input type="text" id="User" name="Name" placeholder="Insira seu estado"/></label><br><br>
							

						


							<button type="button" class="btncompra btn-outline-info">Finalizar compra</button>
						</div>
					</div>
				</div>
			</div>

	</div>
</body>