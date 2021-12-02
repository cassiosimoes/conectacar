<?php session_start();
ob_start();
$login=$_POST['login'];
$senha=$_POST['senha'];
include ("mestre.php"); //arquivo comum de acesso ao banco de dados



$sql= "SELECT * FROM anunciantes WHERE login = :login AND senha = :senha"; 
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':login', $login, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_NUM);

if (empty($row)) header("Location: erro.php"); //erro de login e senha

else
{
	$_SESSION['slogin']=$login;
	$_SESSION['sidusuario']=$row[0];//cria as variaveis de sessão
	$_SESSION['snome']=$row[1];
	$_SESSION['sconfig']="";
	
	header("Location: dashboard.php");//sucesso
}


?> 
