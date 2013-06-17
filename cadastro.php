<? include_once 'conexao/conecta.php';
?>

<html>
    <head>

    </head>
    
    <body>
        
               
        <form action="incluirCadastro.php" method="post">
            
        Nome Completo: <input type="text" name="nome_usuario"/></br></br>
        Email: <input type="text" name="email_usuario"/></br></br>
        Senha: <input type="password" name="senha_usuario"/></br></br>
        Logradouro: <input type="text" name="logradouro_usuario"/></br></br>
        Bairro: <input type="text" name="bairro_usuario"/></br></br>
        Cidade: <input type="text" name="cidade_usuario"/></br></br>
        UF:<input type="text" name="estado_usuario"/></br></br>
        CEP: <input type="text" name="cep_usuario"/></br></br>
        RG: <input type="text" name="rg_usuario"/></br></br>
        CPF: <input type="text" name="cpf_usuario"/></br></br>
        Sexo: <input type="text" name="sexo_usuario"/></br></br>
        Data de Nascimento: <input type="text" name="data_nasc_usuario"/></br></br>
        Telefone: <input type="text" name="telefone_usuario"/></br></br>
        
        
        <input type="submit" text="Cadastrar"/>
        </form>
        
        
       
    </body>
    </html>
