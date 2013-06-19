<? include_once 'conexao/conecta.php';
?>

<html>
<body>

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
    v=v.replace(/\D/g,"");                  //Remove tudo o que nÃƒÂ£o ÃƒÂ© dÃƒÂ­gito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parÃƒÂªnteses em volta dos dois primeiros dÃƒÂ­gitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hÃƒÂ­fen entre o quarto e o quinto dÃƒÂ­gitos
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

<form action="incluirCadastro.php" method="post">
            
        Nome Completo: <input type="text" maxlength="50" name="nome_usuario" title="Informe o nome"/></br></br>
        Email: <input type="text" name="email_usuario" title="Informe o e-mail"/></br></br>
        Senha: <input type="password" name="senha_usuario" title="Informe a senha"/></br></br>
        Logradouro: <input type="text" name="logradouro_usuario" title="Informe o Logradouro"/></br></br>
        Bairro: <input type="text" name="bairro_usuario" title="Informe o bairro"/></br></br>
        Cidade: <input type="text" name="cidade_usuario"/></br></br>
        UF: <select id="lista1" size="1" name="estado_usuario" >
<option value="RJ"> AC </option>
<option value="BA"> AL </option>
<option value="PR"> AP </option>
<option value="MG"> AM </option>
<option value="SE"> BA </option>
<option value="DF"> CE </option>
<option value="AM"> DF </option>
<option value="AC"> ES </option>
<option value="AC"> GO </option>
<option value="AC"> MA </option>
<option value="AC"> MT </option>
<option value="AC"> MS </option>
<option value="AC"> MG </option>
<option value="AC"> PA </option>
<option value="AC"> PB </option>
<option value="AC"> PR </option>
<option value="AC"> PE </option>
<option value="AC"> PI </option>
<option value="AC"> RJ </option>
<option value="AC"> RN </option>
<option value="AC"> RS </option>
<option value="AC"> RO </option>
<option value="AC"> RR </option>
<option value="AC"> SC </option>
<option value="AC"> SP </option>
<option value="AC"> SE </option>
<option value="AC"> TO </option>
</select>        </br></br>

        CEP: <input type="text" name="cep_usuario"/></br></br>
        Número: <input type="text" name="numero_usuario" size="15"/></br></br>
        Complemento: <input type="text" name="complemento_usuario" size="5"/></br></br>
        RG: <input type="text" name="rg_usuario"/></br></br>
        CPF: <input type="text" name="cpf_usuario"/></br></br>
        Sexo: <input type="radio" name="sexo_usuario" id="masculino" value="" checked="checked" /> Masculino
               <input type="radio" name="sexo_usuario" id="feminino"  value="" /> Feminino</br></br>
        Data de Nascimento: <input type="text" name="data_nasc_usuario"/></br></br>
        Telefone: <input type="text" name="telefone_usuario" id="telefone" maxlength="14" placeholder="(XX) XXXX-XXXX" title="Informe o telefone"/></br></br>
        
        
        
        
        <input type="submit" text="Cadastrar"/>
        </form>