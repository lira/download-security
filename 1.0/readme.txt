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

Instalação

1º Abra o download.php e edite as seguintes variaveis:

$HOME = Coloque aqui o site onde será redirecionado o usuário em caso ele tiver clicado no link e um site não autorizado ou se o arquivo não existir.

$ENDSEGUROS = coloque o endereço de sites autorizados a fazerem o download.

$ARQUIVOS[url_1] |
$ARQUIVOS[url_2]  > são os endereços dos servidores que estão sendo hospedados os arquivos, se for necessario crie outra variavel (ex. ARQUIVOS[url_4])
$ARQUIVOS[url_3] |

OPS: Não é necessário preencher todos os campos $ARQUIVOS

2º Como chamar um arquivo para download?

Faça o Upload do download.php
Para fazer um link é simples é http://suahp.com.br/download.php?serv=1&arquivo=teste.zip

Como eu sei o serv?
No exemplo tá serv=1 né... blz... você sabe qual o serv a partir do que você colocou na $ARQUIVOS[url_?]
Que se no lugar da ? for 1 o serv vai ser 1... e assim por diante.

EXEMPLO GERAL!

$HOME = http://localhost/
$EDNSEGUROS = array("http://localhost");
$ARQUIVOS[url_1] = "http://localhost/downloads"; ATENÇÃO SEM A BARRA! ‘‘/’’
$ARQUIVOS[url_2] = "http://meufile.hpg.com.br/files"
$ARQUIVOS[url_3] = "http://br.geocities.com/dls";

Ai eu quero baixar o teste.zip que 
está no servidor http://localhost/downloads o [url_1]
basta eu fazer assim:
http://localhost/download.php?serv=1&arquivo=teste.zip

Assim acontece nos outros servidores.