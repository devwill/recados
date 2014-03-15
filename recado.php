<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<title>MURAL DE RECADOS</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<script src="js/mural.js"></script>
<script language="JavaScript" type="text/JavaScript">
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
</script>
<script language="Javascript">
function mural() {
return true;
}
window.onerror = mural;
</script>
<?

require ("Connections/conectdb.php");

$sql = "SELECT * FROM recados ORDER BY id DESC LIMIT 1";

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
<div id="tamanho">
<table width="350" border="0" cellpadding="0" cellspacing="0">
<tr bgcolor="#000000">
            <td><div align="center"><span class="style10">MURAL DE RECADOS</span></div></td>
    </tr>
          <tr bgcolor="#000000">
            <td><div align="center">
              <table width="100%" border="0">
                <tr>
                  <td width="50%"><div align="center"><a href="exibe_recados.php" target="_parent" class="style12">TODOS OS RECADOS</a> </div></td>
                  <td width="50%"><div align="center"><a href="javascript:abrir_form('form.php')" onmouseover="window.status='DEIXE SEU RECADO'; return true;">DEIXE SEU RECADO</a></div>
                </tr>
              </table>
            </div></td>
          </tr>
  </table>
<table width="350" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="450"><img src="<? echo"$arquivo";?>" alt="<? echo"$de";?>" width="100" height="100" border="0" align="left" class="image01" bordercolor='#FF6600'/>
      <table width="245" border="1" bordercolor="#000000">
  <tr bordercolor="#666666" bgcolor="#666666">
    <td><span class="style9">De:</span> <span class="style7"><font color="#FFFFFF"><? echo"$de";?></td>
    <td><span class="style9">Para:</span> <span class="style7"><font color="#FFFFFF"><? echo"$para";?></a></span></td>
  </tr>
</table>
      <table width="245" border="1" bordercolor="#000000">
        <tr bordercolor="#000000" bgcolor="#000000">
          <td><div align="center"><span class="style7"><font color="#FFFFFF"><? echo"$recado";?></a></span></div></td>
        </tr>
      </table></td>
  </tr>
</table>
<? } ?>
</div>
<script language="Javascript" type="text/javascript">
  parent.document.getElementById("mural").height = document.getElementById("tamanho").scrollHeight + 1; //40: Margem Superior e Inferior, somadas
</script>
