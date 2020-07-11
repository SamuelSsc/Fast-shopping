<?php 
//include 'usuario.php';

Class Produtos
{
	public $pdo;
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

	public function preço($id_prod)
	{
		$sql = $pdo->prepare("SELECT preço from produto WHERE id_produto = :id");
		$sql->blindValue(":id",$id_prod);	
		$preco = $sql->fetch();
		$sql->execute();

	}
}




 ?>