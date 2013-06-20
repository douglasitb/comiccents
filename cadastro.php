<? include_once 'conexao/conecta.php';
?>

<html>
<body>

    <style type="text/css">
        .formulario{
            margin-left: 50px;
        }
        
        .linha1{
            background-color: #F9EFE5;
        }
        
        .linha2{
            background-color: #F7E1C9;
        }
    </style>
    
    
<script type="text/javascript">
/* MÃƒÂ¡scaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");                  //Remove tudo o que nao for digito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parenteses em volta dos dois primeiros digitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hifen entre o quarto e o quinto digitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeypress = function(){
		mascara( this, mtel );
	}
}

</script>

<h3>Cadastro</h3>
<br /><br />
<form action="incluirCadastro.php" method="post" class="formulario">
    
<table width="400" height="50" border="0" cellspacing="0" class="tabela">

        <tr class="linha1">
            <td> Nome Completo: </td>
            <td> <input type="text" maxlength="50" name="nome_usuario" title="Informe o nome"/> </td>
	</tr>	
	
        <tr class="linha2">
            <td> Sexo: </td>
            <td> <input type="radio" name="sexo_usuario" id="masculino" checked="checked" /> Masculino
                 <input type="radio" name="sexo_usuario" id="feminino" /> Feminino </td>
        </tr>
        
        <tr class="linha1">
            <td> Data de Nascimento: </td>
            <td> <input type="text" name="data_nasc_usuario"/> </td>
        </tr>
        
        <tr class="linha2">
            <td> Telefone: </td>
            <td> <input type="text" name="telefone_usuario" id="telefone" maxlength="14" placeholder="(XX) XXXX-XXXX" title="Informe o telefone"/> </td>
        </tr>
        
        <tr class="linha1">
            <td> Email: </td>
            <td> <input type="text" name="email_usuario" title="Informe o e-mail"/> </td>
        </tr>
        
        <tr class="linha2">
            <td> Senha: </td> 
            <td> <input type="password" name="senha_usuario" title="Informe a senha"/> </td>
        </tr>
        
        <tr class="linha1">
            <td>UF:</td>
            <td><select name="uf_usuario">
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SP</option>
                        <option>SE</option>
                        <option>TO</option></select><td></tr>
    
        <tr class="linha2">
            <td> Cidade: </td>
            <td> <input type="text" name="cidade_usuario"/> </td>
        </tr>
        
        <tr class="linha1">
            <td> Bairro: </td>
            <td> <input type="text" name="bairro_usuario" title="Informe o bairro"/> </td>
        </tr>
        
        <tr class="linha2">
            <td> Rua: </td>
            <td> <input type="text" name="logradouro_usuario" title="Informe o Logradouro"/> </td>
        </tr>
        
        <tr class="linha1">
            <td> Número: </td>
            <td> <input type="text" name="numero_usuario" size="5"/> </td>
        </tr>
            
        <tr class="linha2">
            <td> Complemento: </td>
            <td> <input type="text" name="complemento_usuario" size="5"/> </td>
        </tr>
            
        <tr class="linha1">
            <td> CEP: </td>
            <td> <input type="text" name="cep_usuario"/> </td>
        </tr>
        
        <tr class="linha2">
            <td> RG: </td>
            <td> <input type="text" name="rg_usuario"/> </td>
        </tr>
        
        <tr class="linha1">
            <td> CPF: </td>
            <td> <input type="text" name="cpf_usuario"/> </td>
        </tr>
        
        <tr><td> <br /> <br /> </td></tr>
        
        <tr>
        <td> <input type="submit" value="Cadastrar" /> &nbsp &nbsp
        <input type="reset"  value="Limpar" /> </td>
        <tr>
        
</table> 
</form>