<?php
ob_start();
$login = "admin"; //armazena o usu�rio dentro da vari�vel $login
$senha = "admin"; //armazena a senha dentro da vari�vel $senha

//se o usu�rio digitado for igual ao que esta ali em cima, e a senha tamb�m
if ($login == $_POST['usuario'] && $senha == $_POST['password'])
//entao execute isto
{
//aqui vai entrar a novidade, antes de redirecionarmos
//vamos salvar algumas informa��es para utilizar depois

//primeiro eu dou o valor 1 para a vari�vel $validacao
$validacao = "1"; //usaremos essa vari�vel para verificar se ele est� logado, se o usu�rio n�o tiver o valor 1 nessa vari�vel ele n�o est� logado!
$usuario = $_POST['usuario']; // puxa o nome do usu�rio digitado no formulario do index.html
//inicio uma Sessao (session e similar a uma gaveta movel)
session_start();
//gravo as informa��es das vari�veis dentro das sess�es
$_SESSION['usuario'] = $usuario;
$_SESSION['validacao'] = $validacao;

//Pronto agora redirecione o usu�rio para a p�gina secreta

//abre a p�gina secretaaaa
header("Location: secreta.php");
}
//senao
else
{
//exiba um alerta dizendo que a senha esta errada
?>

<script type="text/javascript">
alert("Login ou senha incorreta");
</script>

<?
echo "<meta HTTP-EQUIV='refresh' CONTENT='7;URL=index.html'>";
echo "<br>";
echo "<p align='center'>Usu�rio ou Senha Incorreta Por Favor volte e Digite Novamente</p>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<p align='center'>Em 7 Segundo voc� ser� redirecionado para Tela de Login</p>";
echo "<br>";
echo "<br>";
echo "<p align='center'><a href=index.html>VOLTAR</a></p>";
}
?>