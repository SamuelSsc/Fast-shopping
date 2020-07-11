<?php

Class Usuario
{
	private $pdo;
	public $msgErro = "";

	public function conectar($dbname, $host, $usuario, $senha)
	{
		global $pdo;
		global $msgErro;
		try {
			$pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $usuario, $senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}


	public function cadastrar($nome, $email, $senha)
	{
		global $pdo;
		//verificar se já esta cadastrado
		$sql = $pdo->prepare("SELECT id_Usuario FROM usuario WHERE email = :e");
		$sql->bindValue(":e", $email);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false;
		}
		else //Cadastrar
		{
			$sql = $pdo->prepare("INSERT INTO usuario (nome, email, Senha) VALUES (:n, :e, :s)");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", md5($senha));
			$sql->execute();
			return true;
		}
	}



	public function logar($email, $senha)
	{
		global $pdo;

		//Verificar se o email esta cadastrado
		$sql = $pdo->prepare("SELECT id_Usuario from usuario where email= :e and senha = :s");
		$sql->bindValue(":e", $email);
		$sql->bindValue(":s", md5($senha));
		$sql->execute();
		if($sql->rowCount()>0)
		{
			//entra e Loga
			$dado = $sql->fetch();
			session_start();
			$_SESSION["id_Usuario"] = $dado["id_Usuario"];
			$_SESSION["email"] = $email;
			return true; 
		}else{
			return false;
		}
	}


	//TENTANDO FAZER A VARIAVEL MOSTRAR OS PREÇOS dando erro

	/*public function precos($id,$precos)
	{
		global $pdo;

		$consulta = "SELECT preço FROM produtos WHERE id= :id";
		$con = $msqli->query($consulta) or die($msqli->error);

		$preco = $con->fetch_array(){
			return $preco;
		};
	}*/

}

?>






