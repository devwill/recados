<?   
include"Connections/conectdb.php"; 

$id = $_GET['id'];
$query = mysql_query("DELETE FROM recados where id='$id'");  //comando que exclui o registro   
echo "<script>window.location='secreta.php';</script>";  
?>  