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
// gratuitos e também é uma injustiça você por seu arquivo para download    //
// e vem um espertinho e só copia o link e leva o crédito.                  //
// Já tive minha HP apagada por isso diversas vezes por isso desenvolvi     //
// este sistema que é muito bom, ele verifica a refência, ou seja de que HP //
// o link foi acionado se não for a sua o download não será efetuado e será //
// encaminhado para a página principal da sua HP. Legal né? =P              //
//                                                                          //
//////////////////////////////////////////////////////////////////////////////

// DEFINA ESTÁS VAREAVEIS CONFORME SUAS NECESSIDADES //

// Este será o endereço que será redirecionado a pessoa caso o link não exista ou venha de uma referência desconhecida //
$HOME = "http://localhost/";

// Coloque os endereços dos sites autorizados a fazer os downloads //
$ENDSEGUROS = array("http://localhost","http://localhost2");

// Coloque o endereço dos servidores onde estão guardados os arquivos //
$ARQUIVOS[url_1] = "http://localhost";
$ARQUIVOS[url_2] = "http://www.portarquivo.com/meuarquivos";
$ARQUIVOS[url_3] = "http://www.suahp.com/arquivos";

// Para chamar os arquivos para o download leia as instruções na Readme.txt //

//FIM //

// A partir daqui não é remendado alterar nada! //

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
