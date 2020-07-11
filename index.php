<?php
	session_start();
	require_once 'Classes/usuario.php';
	//require_once 'Classes/produtos.php';
	$u = new Usuario();
	//$p = new Produtos();

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

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="sortcut icon" href="img/favicon.png" type="image/png" />
	<link rel="stylesheet" href="bootstrap/4.1.3/css/bootstrap.min.css">

	<script type="text/javascript" src="jQuery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="JS/menu.js"></script>
	<script src="bootstrap/4.1.3/js/bootstrap.bundle.js"></script>
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

			<a class="navbar-brand" href="#">
				<img src="img/S.png" alt="logo" class="img-fluid">
				<h5 class="nomo_loja ml-3 mb-0">Fast Shopping</h5>					
			</a>
			

			
			<!--botao de Sair -->
			<button type="button" class="btnLog btn-light mt-3 mr-2">
				<?php
					//$_SESSION ['id_usuario'] = false;
				?>
				<style type="text/css">
					a:link{
						text-decoration: none;
					}
				</style>
				<a href="index.php">Sair</a>
			</button>

			<!--botao de Login-->
			<button type="button" class="btnLog btn-light mt-3 mr-2" >
				<a href="html/login.php"> 
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
    		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSite">
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
          					<a class="dropdown-item" href="html/celulares.html">Celulares</a>
          					<a class="dropdown-item" href="html/Notebooks.html">Nootebooks</a>
          					<a class="dropdown-item" href="html/Acessorios.html">Acessorios</a>
        				</div>
      				</li>
	
					<li class="nav-item">
						<a class="nav-link" href="html/sobre.html"> Sobre a loja</a>
					</li>
				</ul>
			</div>
		</nav>

		<!--JANELA DE LOGIN
			<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="ModCenter" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="ModCenter">Entrar</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Endereço de email</label>
									<input type="email" name="email" class="form-control" placeholder="Seu email">
								</div>
								<div class="form-group">
									<label>Senha</label>
									<input type="password" name="senha" class="form-control" placeholder="Senha">
								</div>
							</form>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
								<?php
									if (isset($_POST['Confirmar']))
									{
										$email =  addslashes($_POST['email']);
										$senha =  addslashes($_POST['senha']);

										//verificar se mcrypt_enc_self_test(td)ão todos preenchidos
										if (!empty($email) && !empty($senha)) 
										{	
											$u->conectar("fast_shopping","localhost","root","");
											if($u->msgErro == "")
											{	
												if($u->logar($email, $senha))
												{
													echo "Tá logado carai";;
												}
												else
												{
													?>
													<div class="msg-erro">	
														 "Email e/ou senha estão incorretos";
													</div>
													<?php
												}
											}
											else
											{
												?>
												<div class="msg-erro">	
								                	<?php 
								                		echo "Erro com o banco: ".$u->msgErro; 
								                	?>
												</div>
												<?php
											}
										}
										else
										{
											?>
											<div class="msg-erro">	
								                "Preencha todos os campos!"
											</div>
											<?php
											
										}
									}
								?>
						</div>
						<div class="mx-auto">Ainda não possui uma conta?<button type="button" class=" mr-auto btn btn-link">
							 <a href="html/cadastro.php">Cadastrar-me</button>
						</div>
					</div>
				</div>
			</div>	
		-->


		
		<!--CARROSEL-->
		<div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
				<li data-target="#myCarousel" data-slide-to="6"></li>
				<li data-target="#myCarousel" data-slide-to="7"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item ">
					<img class="d-block w-100" src="img/c3.jpg" alt="Primeiro Slide">
				</div>	
				<div class="carousel-item">
					<img class="d-block w-100" src="img/c1.png" alt="Terceiro Slide">
				</div>
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/img0.jpg" alt="Terceiro Slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/nossamarc.jpg" alt="Terceiro Slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/prop.jpg" alt="Terceiro Slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/img4.jpg" alt="Terceiro Slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/img5.jpg" alt="Terceiro Slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Próximo</span>
			</a>
		</div>


		<!--CARDS DOS PRODUTOS-->
		<div class="row mb-5 mt-4">
			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/odysei.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Notebook gamer sansung odyssey</h5>
						16 GB(Ram) + 1TB (HD)<br>
						GeForce gtx1050<br>
						processador intel core i7<br>
						<?php/*
							$p->preço("1");
							print_r($preco);
						*/?>	
						<button type="button" class="btn btn-outline-info">
							<a href="html/Sansung odyssey.php">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/positivo7.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Notebook positivo Motion I341TA</h5>
						processador intel core i3<br>
						4 GB(Ram) + 1TB (HD)<br>
						Windows 10<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Positivo Motion.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/a30s.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Samsung galaxy A30s</h5>
						Android 9.0<br>
						4 GB(Ram) + 64 GB (Rom)<br>
						Bateria de 4000mAh.<br>
						Tela de 6.4 <br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Samsung A30s.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/s10+.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Samsung galaxy S10+</h5>
						Android 9.0<br>
						8 GB(Ram) + 128 GB (Rom)<br>
						Bateria de 4100mAh.<br>
						Processador octa-core de 2.7GHz<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Samsung S10.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/g8 plus.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Motorola Moto G8 PLUS</h5>
						Android 9.0<br>
						4 GB(Ram) + 64 GB (Rom)<br>
						Bateria de 4000mAh.<br>
						Tela de 6.3<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Moto G8.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/moto oneaction.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Motorola Moto One Action</h5>
						Android 9.0<br>
						4 GB(Ram) + 128 GB (Rom)<br>
						Bateria de 3500mAh.<br>
						Tela de 6.3<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Moto one.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/xiaomi redmi note 8 pro.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Xiaomi Redmi Note 8 Pro</h5>
						Android 10 MIUI<br>
						6 GB(Ram) + 128 GB (Rom)<br>
						Bateria de 4500mAh.<br>
						Processador octa-core de 2.0GHz<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Xiaomi Redmi.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/xiaomi mi9.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Xiaomi Mi 9</h5>
						Android 9 Pie 10 MIUI<br>
						6 GB(Ram) + 128 GB (Rom)<br>
						Bateria de 3300mAh.<br>
						Tela de 6.39<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Xiaomi Mi 9.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/Dell inspiron.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Notebook Dell Inspiron</h5>
						Sistema: Ubuntu linux 18.04<br>
						4 GB(Ram) + 500 GB (Rom)<br>
						Tela de 15.6<br>
						Processador: Intel pentium<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Note Dell.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/fone jbl.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Fone de ouvido sem fio JBL tune T500BT</h5>
						Versão Bluetooth 4.1<br>
						Bateria de 300mAh<br>
						Comprimento do cabo: 3,94 pés<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Fone JBL.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/airdots.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Fone de ouvido Bluetooth xiaomi redmi Airdots</h5>
						Versão Bluetooth 5.0<br>
						Bateria de 300mAh (case) <br>
						Bateria de 40mAh(fone)<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Fone xiaomi.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="img/smartch watch sansung.jpg" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Sansung Smartwatch A1</h5>
						Bluetooth 3.0<br>
						Micro chip<br>
						Resolução da tela: 240x240 Px<br>
						Câmera: 0.3 Mp frontal para selfies<br>
						<button type="button" class="btn btn-outline-info">
							<a href="html/Samsung Smartwatch.html">saiba mais</a>
						</button>
					</div>
				</div>
			</div>



		</div>


			
	</div>

</body>
</html>