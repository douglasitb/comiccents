<? include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");
?>

<html>
    <head>

    </head>
    
    <body>
        
               
        <form action="incluirCadastroAdm.php" method="post">
            
        Nome Completo: <input type="text" maxlength="50" name="nome_usuario" title="Informe o nome"/></br></br>
        Email: <input type="text" name="email_usuario" title="Informe o e-mail"/></br></br>
        Senha: <input type="password" name="senha_usuario" title="Informe a senha"/></br></br>
        Logradouro: <input type="text" name="logradouro_usuario" title="Informe o Logradouro"/></br></br>
        Bairro: <input type="text" name="bairro_usuario" title="Informe o bairro"/></br></br>
        Cidade: <input type="text" name="cidade_usuario"/></br></br>
        UF:<input type="text" name="estado_usuario"/></br></br>
        CEP: <input type="text" name="cep_usuario"/></br></br>
        Número: <input type="text" name="numero_usuario"/></br></br>
        Complemento: <input type="text" name="complemento_usuario"/></br></br>
        RG: <input type="text" name="rg_usuario"/></br></br>
        CPF: <input type="text" name="cpf_usuario"/></br></br>
        Sexo: <input type="radio" name="sexo_usuario" id="masculino" value="" checked="checked" /> Masculino
               <input type="radio" name="sexo_usuario" id="feminino"  value="" /> Feminino</br></br>
        Data de Nascimento: <input type="text" name="data_nasc_usuario"/></br></br>
        Telefone: <input type="text" name="telefone_usuario" id="telefone" maxlength="14" placeholder="(XX) XXXX-XXXX" title="Informe o telefone"/></br></br>
        
        
        
        
        <input type="submit" text="Cadastrar"/>
        </form>
        
        
       
    </body>
    </html>


