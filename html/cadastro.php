<?php
	require_once '../Classes/usuario.php';
	$u = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Fast shopping</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<!--<link rel="stylesheet" href="../bootstrap/4.1.3/css/bootstrap.min.css">-->
		<link rel="sortcut icon" href="../img/favicon.png" type="image/png" />

		<script type="text/javascript" src="../jQuery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../JS/menu.js"></script>
		<script src="../bootstrap/4.1.3/js/bootstrap.bundle.js"></script>


	</head>
	<body>
		<div id="Corpo-form-cad">
			<a href="../index.php">
				<img src="../img/S2.png" alt="logo" class="img-fluid mx-auto">
			</a>
			<h1>Cadastrar</h1>
			<form method="POST">
				<input class="form-control mr-sm-2 mt-3" type="text" name="nome" placeholder="Nome Completo" maxlength="30">
				<input class="form-control mr-sm-2 mt-3" type="email" name="email" placeholder="Email" maxlength="60">
				<input class="form-control mr-sm-2 mt-3" type="password" name="senha" placeholder="Senha" maxlength="15">
				<input class="form-control mr-sm-2 mt-3" type="password" name="confsenha" placeholder="Confirmar Senha" 
				maxlength="15">
				<input class="btn btn-btn-dark my-2 my-sm-0 mt-3" type="submit" placeholder="cadastrar">
			</form>
		</div>
		<?php
			if (isset($_POST['nome']))
			{
				$nome = addslashes($_POST['nome']);
				$email =  addslashes($_POST['email']);
				$senha =  addslashes($_POST['senha']);
				$confirmarSenha =  addslashes($_POST['confsenha']);

				//verificar se mcrypt_enc_self_test(td)ão todos preenchidos
				if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) 
				{	
					$u->conectar("fast_shopping","localhost","root","");
					if($u->msgErro == "")
					{
						if($senha == $confirmarSenha)
						{
							if($u->cadastrar($nome, $email, $senha))
							{
								?>
								<div id="msg-certo">
									"Cadastrado com sucesso"
									<a href="login.php">Voltar a tela anterior para Entrar	</a>;
								</div>
								<?php
							}
							else
							{
								?>
								<div class="msg-erro">
									"Email já cadastrado!";
								</div>
								<?php
							}
						}
						else
						{
							?>
							<div class="msg-erro">
								"Senhas incompátiveis!";
							</div>
							<?php
						}
					}
					else
					{
						?>
						<div class="msg-erro">
							<?php echo "Erro: ".$u->msgErro; ?>
						</div>
						<?php
					}
				}
				else
				{
					?>
					<div class="msg-erro">
						"Preencha todos os campos!!";
					</div>
					<?php
				}
			}
		
		?>

	</body>
</html>