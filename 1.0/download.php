<?
/////////////////////////////////
// --------------------------  //
// Download Security Ver. 1.0  //
// --------------------------  ///////////////////////////////////////////////
//                                                                          //
// Feito por: Fernando Lira (fhlira@bol.com.br) em Maio de 2002             //
//                                                                          //
// Este script foi desenvolvido com a finalidade                            //
// de inibir os copiadores de links, que fazem muitas                       //
// HPs que desponibilizam arquivos para download e tem seus links           //
// copiados, que por fim seus arquivos apagados pelos servidores            //
// gratuitos e tamb�m � uma injusti�a voc� por seu arquivo para download    //
// e vem um espertinho e s� copia o link e leva o cr�dito.                  //
// J� tive minha HP apagada por isso diversas vezes por isso desenvolvi     //
// este sistema que � muito bom, ele verifica a ref�ncia, ou seja de que HP //
// o link foi acionado se n�o for a sua o download n�o ser� efetuado e ser� //
// encaminhado para a p�gina principal da sua HP. Legal n�? =P              //
//                                                                          //
//////////////////////////////////////////////////////////////////////////////

// DEFINA EST�S VAREAVEIS CONFORME SUAS NECESSIDADES //

// Este ser� o endere�o que ser� redirecionado a pessoa caso o link n�o exista ou venha de uma refer�ncia desconhecida //
$HOME = "http://localhost/";

// Coloque os endere�os dos sites autorizados a fazer os downloads //
$ENDSEGUROS = array("http://localhost","http://localhost2");

// Coloque o endere�o dos servidores onde est�o guardados os arquivos //
$ARQUIVOS[url_1] = "http://localhost";
$ARQUIVOS[url_2] = "http://www.portarquivo.com/meuarquivos";
$ARQUIVOS[url_3] = "http://www.suahp.com/arquivos";

// Para chamar os arquivos para o download leia as instru��es na Readme.txt //

//FIM //

// A partir daqui n�o � remendado alterar nada! //

$ref = $HTTP_REFERER;
if($ref) {
$ok = 0;
while(list($dominio,$okref) = each($ENDSEGUROS)) {
if (ereg($okref,$ref)) {
$ok = 1;
}
}
$HP = "url"."_"."$serv";
if ($ARQUIVOS[$HP] AND $ok == 1) {
HEADER("Location: $ARQUIVOS[$HP]/$file");
} else {
HEADER("Location: $HOME");
}
}
?>
