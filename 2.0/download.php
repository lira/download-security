<?
/*
Download Security 2
Por Fernando Lira(fhlira@bol.com.br)

Nesta vers�o tem suporte a e-mail, para avisar o adminstrador
sobre os sites que copiam seus links, ajudando a evitar que
os links copiados continuem funcionando.
Para chamar os downloads use:
http://localhost/download.php?serv=1&arquivo=teste.zip
serv � igual ao $ARQUIVOS[url_x]
no caso acima o x � 1
Obs: Rodar no PHP 4.2.0 para cima!
*/

/* CONFIGURA��ES */

$CONFIG[HP] = "Seu Site";
$CONFIG[LINK] = "http://ds.com";

/* Usar e-mail de notifica��o */
$CONFIG[MAIL] = 0; /* 0 = n�o usar, 1 = enviar e-mail*/
$CONFIG[ADM] = "admin@mail.com"; /* Coloque seu e-mail mesmo que voc� escolheu 0 */
$CONFIG[ASSUNTO] = "Copia dos links!"; /* Assunto do e-mail de notifica��o */

/* Os endere�os seguros de onde partiram os downloads */
/* Dica coloque o endere�o com e sem www */
$CONFIG[OK] = array("http://www.ds.com","http://ds.com");

/* Coloque o endere�o dos servidores onde est�o guardados os arquivos */
/* Dica n�o coloque nomes faceis nas pasta como download
   Coloque assim http://arquivos/dl/f6j0/ ai evita a copia mais ainda
   Pois o sistema n�o � 100%, na hora de iniciar o download o navegador tem acesso
   ao link verdadeiro */
$ARQUIVOS[url_1] = "http://www.server.com/"; /* ATEN��O SEM A BARRA! / */
$ARQUIVOS[url_2] = "http://meufile.hpg.com.br/files";
$ARQUIVOS[url_3] = "http://br.geocities.com/dls";

/* A partir daqui n�o � remendado alterar nada! */

$ref = $_SERVER['HTTP_REFERER'];

if(!empty($ref)) {
$ok = 0;
while(list($dominio,$okref) = each($CONFIG[OK])) {
if (ereg($okref,$ref)) {
$ok = 1;
}
}
$HP = "url"."_"."$serv";
if ($ARQUIVOS[$HP] AND $ok == 1) {
$arquivo = $_GET['arquivo'];
HEADER("Location: $ARQUIVOS[$HP]/$arquivo");
} else {
if($CONFIG[MAIL] == 1){
$men = "Notifica��o: \n\n";
$men .= "A url: $ref\n";
$men .= "Est� copiando seus links";
@mail($CONFIG[ADM],$CONFIG[ASSUNTO],$men,"From: \"Administrador\" <$CONFIG[ADM]>") or die("<font face=\"Verdana\" size=\"2\">Erro ou tentar enviar o E-mail!");
}
$ErroTex = ($CONFIG[MAIL]==1) ? "Um e-mail foi enviado ao adminstrador!" : "C�pia de link n�o � legal <a href=\"mailto:$CONFIG[ADM]?Subject=Copia de link!\">Den�ncie</a>";
echo "<html>\n<head>\n<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"10; URL=$CONFIG[LINK]\">\n";
echo "<title>$CONFIG[HP] - Refer�ncia Inv�lida!</title></head>\n";
echo "<!-- Download Security 2 -->\n";
echo "<div align=\"center\">";
echo "<font face=\"Verdana\">";
echo "<font size=\"3\"><b>Refer�ncia Inv�lida!</b><br><br>\n";
echo "<font size=\"2\">O site: <b>$ref</b> n�o � uma refer�ncia v�lida<br>\n";
echo "<font size=\"2\">$ErroTex<br>\n";
echo "<font size=\"2\"><a href=\"$CONFIG[LINK]\">Retornar � $CONFIG[HP]</a><br>\n";
}
} else {
echo "<html>\n<head>\n<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"10; URL=$CONFIG[LINK]\">\n";
echo "<title>$CONFIG[HP] - Erro de Refer�ncia</title></head>\n";
echo "<!-- Download Security 2 -->\n";
echo "<div align=\"center\">";
echo "<font face=\"Verdana\">";
echo "<b><font size=\"3\">Erro sem refer�ncia!</b><br><br>";
echo "<font size=\"2\"><a href=\"$CONFIG[LINK]\">Retornar � $CONFIG[HP]</a><br><br>\n";
echo "<font size=\"2\"><b>Poss�veis erros:</b><br>\n";
echo "<font size=\"1\">* Voc� pode ter aberto o link em uma nova p�gina.<br>\n";
echo "* Pode ter usado <i>o salvar como...</i> do navegador.<br>\n";
echo "* Pode ter acessado o link direto.<br>\n";
echo "* Pode ter acessado o arquivo de download direto.<br>\n";
echo "* Se n�o, retorne e tente novamente.<br>\n";
echo "</font></div>\n</html>";
}
?>
