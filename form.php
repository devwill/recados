<HTML>
<HEAD>
<TITLE>.:: ENVIAR RECADOS ::.</TITLE>
<link href="css/w2box.css" rel="stylesheet" type="text/css" />
<script src="js/mural.js"></script>
</HEAD>
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
<BODY>
<form action="upload_rec.php" enctype="multipart/form-data" name="mural" method="post" onSubmit="document.getElementById('enviar').disabled = true">
<input type="hidden" name="acao" value="cadastrar">
<br>
<br>
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
      <td scope="col">
        <div align="left">
          <div align="left"><span class="style20">Foto</span>:</div>
          <input name="arquivo" type="file" id="arquivo" style="style2" size="35" />
        </div></td>
    </tr>
    <tr>
      <td scope="col"><div align="left"><span class="style18">Para</span>: </div>
        <div align="left"><input name="para" type="text" id="para" size="35" />
      </div></td>
    </tr>
    <tr>
      <td align="left" scope="col"><div align="left"><span class="style20">Cidade</span>: </div>
        <div align="left"><input name="cidade" type="text" id="cidade" size="35" />
      </div></td>
    </tr>
    <tr>
      <td align="left" scope="col"><div align="left"><span class="style20">Email</span>::</div>
        <div align="left"><input name="email" type="text" id="email" size="35" />
      </div></td>
    </tr>
    <tr>
      <td align="left" scope="col"><div align="left"><span class="style20">Recado</span>:</div>
      <textarea name="recado" cols="30" rows="5" id="recado" onKeyup='ContaCaracteres();'></textarea>
      <input name="caracteres" type="text" disabled class="campos" value="400" size="3" maxlength="3">
</td>
    </tr>
    <tr>
      <td align="left" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td scope="col"><div align="center">
        <input type="submit" id="enviar" name="Submit" value="Enviar Recado" />
      </div></td>
    </tr>
  </table>
  </td>
  </tr>
</table>
</form>
</BODY>
</HTML>