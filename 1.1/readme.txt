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

Instala��o

1� Abra o download.php e edite as seguintes variaveis:

$HOME = Coloque aqui o site onde ser� redirecionado o usu�rio em caso ele tiver clicado no link e um site n�o autorizado ou se o arquivo n�o existir.

$ENDSEGUROS = coloque o endere�o de sites autorizados a fazerem o download.

$ARQUIVOS[url_1] |
$ARQUIVOS[url_2]  > s�o os endere�os dos servidores que est�o sendo hospedados os arquivos, se for necessario crie outra variavel (ex. ARQUIVOS[url_4])
$ARQUIVOS[url_3] |

OPS: N�o � necess�rio preencher todos os campos $ARQUIVOS

2� Como chamar um arquivo para download?

Fa�a o Upload do download.php
Para fazer um link � simples � http://suahp.com.br/download.php?serv=1&arquivo=teste.zip

Como eu sei o serv?
No exemplo t� serv=1 n�... blz... voc� sabe qual o serv a partir do que voc� colocou na $ARQUIVOS[url_?]
Que se no lugar da ? for 1 o serv vai ser 1... e assim por diante.

EXEMPLO GERAL!

$HOME = http://localhost/
$EDNSEGUROS = array("http://localhost");
$ARQUIVOS[url_1] = "http://localhost/downloads"; ATEN��O SEM A BARRA! ��/��
$ARQUIVOS[url_2] = "http://meufile.hpg.com.br/files"
$ARQUIVOS[url_3] = "http://br.geocities.com/dls";

Ai eu quero baixar o teste.zip que 
est� no servidor http://localhost/downloads o [url_1]
basta eu fazer assim:
http://localhost/download.php?serv=1&arquivo=teste.zip

Assim acontece nos outros servidores.