<? include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");?>


<html>
    <head>

    </head>
    
    <body>
        
               
        <form action="incluirProduto.php" method="post">
            
        Nome do Produto: <input type="text" name="nomeproduto"/></br></br>
        Descri&ccedil;&atilde;o do Produto: <input type="text" name="descricao"/></br></br>
        Pre&ccedil;o de Capa: <input type="text" name="preco"/></br></br>
        Pre&ccedil;o de Venda: <input type="text" name="precovenda"/></br></br>
        Quantidade em Estoque:<input type="text" name="qtde_estoque"/>
                    <select>
                        <option>Excelente</option>
                        <option>Bom</option>
                        <option>Regular</option>
                        <option>Péssimo</option>
                    </select>  </br></br>
        Tamanho do Produto: <input type="text" name="tamanho_produto"/></br></br>
        N&uacute;mero de P&aacute;ginas: <input type="text" name="numero_pags"/></br></br>
        Estado F&iacute;sico: <input type="text" name="estado_fisico"/></br></br>
        Editora do Produto: <input type="text" name="editora_produto"/></br></br>
        Imagem do Produto(URL): <input type="text" name="imagem_url"/></br></br>
        
        <input type="submit" text="Cadastrar"/>
        </form>
        
        
       
    </body>
    </html>
