<?php
$nome_usuario = $_POST["nome_usuario"];
$email_usuario = $_POST["email_usuario"];
$senha_usuario = $_POST["senha_usuario"];
$logradouro_usuario= $_POST ["logradouro_usuario"];
$bairro_usuario= $_POST ["bairro_usuario"];
$cidade_usuario = $_POST ["cidade_usuario"];
$estado_usuario= $_POST ["estado_usuario"];
$rg_usuario = $_POST ["rg_usuario"];
$cpf_usuario = $_POST ["cpf_usuario"];
$sexo_usuario = $_POST ["sexo_usuario"];
$data_nasc_usuario = $_POST ["data_nasc_usuario"];
$tipo_usuario = "RES";
$telefone_usuario = $_POST ["telefone_usuario"];
$cep_usuario = $_POST ["cep_usuario"];


/*echo $nome_produto."<br/>";
echo $descricao_produto."<br/>";
echo $qtde_produto ."<br/>";
echo $preco_produto ."<br/>";
echo $precoVenda_produto."<br/>";
echo $qtde_estoque ."<br/>";*/
//echo $tamanho_produto."<br/>";
/*echo $numero_pags."<br/>";
echo $estado_fisico ."<br/>";
echo $editora_produto."<br/>";
echo $imagem_url ."<br/>";*/


/*$sql ="INSERT INTO produtos(NOME_PRODUTO, DESCRICAO_PRODUTO,PRECO_PRODUTO,PRECOVENDA_PRODUTO,QUANTIDADEESTOQUE_PRODUTO, IMAGEMURL_PRODUTO, TAMANHO_PRODUTO, ESTADO_FISICO, EDITORA_PRODUTO, NUMERO_PAGS)
                   VALUES('$nome_produto','$descricao_produto','$preco_produto','$precoVenda_produto','$qtde_estoque','$imagem_url,'$tamanho_produto','$estado_fisico','$editora_produto','$numero_pags')";*/

$sql ="INSERT INTO usuario(NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,LOGRADOURO_USUARIO,BAIRRO_USUARIO,CIDADE_USUARIO, ESTADO_USUARIO,RG_USUARIO,CPF_USUARIO,SEXO_USUARIO,DATA_NASCIMENTO,TIPO_USUARIO,TELEFONE_USUARIO,CEP_USUARIO)
                   VALUES('$nome_usuario','$email_usuario','$senha_usuario','$logradouro_usuario','$bairro_usuario','$cidade_usuario','$estado_usuario','$rg_usuario','$cpf_usuario','$sexo_usuario','$data_nasc_usuario','$tipo_usuario','$telefone_usuario','$cep_usuario')";
if(mysql_query($sql))
{ echo "Dados inseridos com Sucesso !<br/>";
}

else{ echo"Erro ao enviar!";}

?>

