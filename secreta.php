<?
//Inicia a sessão
session_start();
//agora verifico se ele possui permissão para acessar a página
if ($_SESSION['validacao'] == "1")
{
?>
<HTML>
<HEAD>
<TITLE>.:: PAINEL DESTAQUE ::.</TITLE>
<link href="css/w2box.css" rel="stylesheet" type="text/css" />
<BODY>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div align="center" class="style6">
    <table width="100%" border="0">
      <tr>
        <td width="28%"></td>
        <td width="62%"><span align="center" class="style6">Preencha abaixo</span></td>
        <td width="10%"><a href="deslogar.php" class="style6"><span class="code">Deslogar</span></a></td>
      </tr>
    </table>
  </div>
  <table width="200" border="1" align="center" bordercolor="#FFFFFF">
    <tr>
      <td bordercolor="#333333"><div align="center" class="style6">
          <table width="400" border="0">
            <tr>
              <td align="center"><span class="style14">Preencha Todos os campos abaixo</span></td>
            </tr>
          </table>
      </div>
          <table width="100" border="0" align="center" cellpadding="2" cellspacing="0">
            <tr>
              <td scope="col"><div align="left"><span class="style20">De</span>:</div>
                  <div align="left">
                    <input name="de" type="text" id="de" size="35" />
                </div></td>
            </tr>
            <tr>
              <td scope="col"><div align="left">
                  <div align="left"><span class="style20">Foto</span>:</div>
                <input name="arquivo" type="file" id="arquivo" style="style2" size="35" />
              </div></td>
            </tr>
            <tr>
              <td scope="col"><div align="left"><span class="style18">Para</span>: </div>
                  <div align="left">
                    <input name="para" type="text" id="para" size="35" />
                </div></td>
            </tr>
            <tr>
              <td align="left" scope="col"><div align="left"><span class="style20">Cidade</span>: </div>
                  <div align="left">
                    <input name="cidade" type="text" id="cidade" size="35" />
                </div></td>
            </tr>
            <tr>
              <td align="left" scope="col"><div align="left"><span class="style20">Email</span>::</div>
                  <div align="left">
                    <input name="email" type="text" id="email" size="35" />
                </div></td>
            </tr>
            <tr>
              <td align="left" scope="col"><div align="left"><span class="style20">Recado</span>:</div>
                <textarea name="recado" cols="30" rows="5" id="recado"></textarea></td>
            </tr>
            <tr>
              <td align="left" scope="col">&nbsp;</td>
            </tr>
            <tr>
              <td scope="col"><div align="center">
                <input type="submit" name="Submit" value="Enviar Recado" />
              </div></td>
            </tr>
        </table></td>
    </tr>
  </table>
</form>
<?
require ("Connections/conectdb.php");

$sql = "SELECT * FROM recados ORDER BY id DESC";

$limite = mysql_query("$sql");

while  ($sql = mysql_fetch_array ($limite) ) {

$arquivo = $sql['arquivo'];
$id = $sql['id'];
$de = $sql['de'];
$para = $sql['para'];
$cidade = $sql['cidade'];
$email = $sql['email'];
$recado = $sql['recado'];
?>
<table width="100%" border="1" bordercolor="#FFFFFF">
  <tr>
    <td align="center" bordercolor="#000000"><img src="<? echo"$arquivo";?>" alt="<? echo"$de";?>" width='100' height="100" border="0" align="left" class="image01" bordercolor='#FF6600'/>
  <table width="99%" border="1" bordercolor="#000000">
            <tr bgcolor="#333333">
              <td width="20%" scope="col">
                <div align="left">
                  <p><span class="style20">De:</span> <span class="style7"><font color="#FFFFFF"><? echo"$de";?></span></p>
              </div>
              </td>
              <td width="20%" scope="col"><div align="left"><span class="style20">Para:</span> <span class="style7"><font color="#FFFFFF"><? echo"$para";?></a></span></div></td>
              <td width="59%" scope="col"><div align="left"><span class="style20">E-Mail:</span> <span class="style7"><font color="#FFFFFF"><? echo"$email";?></a></span></div></td>
            </tr>
          </table>
        <table width="200" border="0">
      </table>
        <table width="99%" border="1" bordercolor="#000000">
            <tr bgcolor="#000000">
              <td><div align="left"><span class="style7"><font color="#FFFFFF"><? echo"$recado";?></a></span></div></td>
            </tr>
        </table></td>
  </tr>
</table>
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr bgcolor="#000000">
      <th align="left" valign="top" bgcolor="#CCCCCC" scope="col">&nbsp;</th>
      <th width="100" align="center" valign="top" scope="col"><a href="excluir.php?<? echo"id=$id";?>" class="style21">EXCLUIR</a></th>
    </tr>
  </table>
<hr width="100%" color="#FF0000" />
<? } ?>
</BODY>
</HTML>
<?
} else {
//exiba um alerta dizendo que a senha esta errada
?>

<script type="text/javascript">
alert("Login ou senha incorreta");
</script>

<?
echo "<meta HTTP-EQUIV='refresh' CONTENT='7;URL=index.html'>";
echo "<br>";
echo "<p align='center'>Usuário ou Senha Incorreta Por Favor volte e Digite Novamente</p>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<p align='center'>Em 7 Segundo você será redirecionado para Tela de Login</p>";
echo "<br>";
echo "<br>";
echo "<p align='center'><a href=index.html>VOLTAR</a></p>";
}
?>
