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
<div id="tamanho">
<table width="99%" border="0" align="center">
<tr bgcolor="#000000">
            <td><div align="center"><span class="style10">MURAL DE RECADOS</span></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#000000">
            <td><div align="center"><a href="javascript:abrir_form('form.php')" onmouseover="window.status='DEIXE SEU RECADO'; return true;" class="style12">DEIXE SEU RECADO</a></div></td>
          </tr>
        </table>
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
<table width="99%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td align="left" bordercolor="#000000"><img src="<? echo"$arquivo";?>" alt="<? echo"$de";?>" width='100' height="100" border="0" align="left" class="image01" bordercolor='#FF6600'/>
      <table width="86%" border="1" bordercolor="#000000">
            <tr bgcolor="#333333">
              <td width="18%">
                <div align="left">
                  <p><span class="style9">De:</span> <span class="style7"><font color="#FFFFFF"><? echo"$de";?></span></p>
              </div>              </td>
              <td width="18%"><div align="left"><span class="style9">Para:</span> <span class="style7"><font color="#FFFFFF"><? echo"$para";?></a></span></div></td>
              <td width="40%"><div align="left"><span class="style9">E-Mail:</span> <span class="style7"><font color="#FFFFFF"><? echo"$email";?></a></span></div></td>
              <td width="24%"><div align="left"><span class="style9">Cidade:</span> <span class="style7"><font color="#FFFFFF"><? echo"$cidade";?></a></span></div></td>
            </tr>
          </table>
        <table width="86%" border="1" bordercolor="#000000">
  <tr bgcolor="#000000">
              <td><div align="left"><span class="style7"><font color="#FFFFFF"><? echo"$recado";?></a></span></div></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <hr width="100%" color="#0A0B0D" />
  <? } ?>
  
</div>
<script language="Javascript" type="text/javascript">
  parent.document.getElementById("klausag").height = document.getElementById("tamanho").scrollHeight + 1; //40: Margem Superior e Inferior, somadas
</script>
