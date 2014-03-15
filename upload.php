<link href="css/w2box.css" rel="stylesheet" type="text/css" />
<?
require("Connections/conectdb.php");
//se existir o arquivo
if(isset($_FILES["arquivo"])){

$arquivo = $_FILES["arquivo"];

$pasta_dir = "./arquivos/";//diretorio dos arquivos
//se nao existir a pasta ele cria uma
if(!file_exists($pasta_dir)){
mkdir($pasta_dir);
}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
// Vamos usar a biblioteca WideImage para o redimensionamento das imagens
require("lib/WideImage/WideImage.php");

// Carrega a imagem enviada
$original = WideImage::load($arquivo_nome);

// Redimensiona a imagem original para 100x100 caso ela seja maior que isto e salva
$original->resize(100, 100, 'inside', 'down')->saveToFile($arquivo_nome, null, 100);

echo mysql_insert_id(); // Retorna o id da foto

//conecta no banco
$arquivo = $_POST['arquivo'];
$id = $_POST['id'];
$de = $_POST['de'];
$para = $_POST['para'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$recado = $_POST['recado'];

$query = "INSERT INTO recados (arquivo, de, para, cidade,  email, legenda) VALUES ('$arquivo_nome','$de','$para','$cidade','$email','$recado')"; // inserção sql na tabela recados
mysql_query($query) or die (mysql_error());
mysql_close();//fecha conexão

}

?>
<? echo "<center><font size='3'>Cadastrado com sucesso";
echo "<center><br>";
echo  "<img src='$arquivo_nome' width='100' height='100'><br>$telefone";
echo "<meta HTTP-EQUIV='refresh' CONTENT='15;URL=secreta.php'>";
echo "<p>&nbsp;</p>";
echo "<a href=secreta.php>VOLTAR</a>";
 ?>
