<? include_once 'conexao/conecta.php';
?>

<html>
<head> <title> Cadastro </title> </head>
<body>

<script type="text/javascript">
/* MÃ¡scaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");                  //Remove tudo o que nÃ£o Ã© dÃ­gito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parÃªnteses em volta dos dois primeiros dÃ­gitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hÃ­fen entre o quarto e o quinto dÃ­gitos
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

<form action="../incluirCadastro.php" method="get" id="formulario">

 
Nome:  <input type="text" maxlength="50" name="nome_usuario" title="Informe o nome"/> <br /><br />

E-mail: <input type="text" name="email_usuario" title="Informe o e-mail"/> <br /><br />

Logradouro: <input type="text" name="logradouro_usuario" title="Informe o Logradouro"/> <br /><br />

Bairro: <input type="text" name="bairro_usuario" title="Informe o bairro"/> <br /><br />

Telefone: <input type="text" name="telefone_usuario" id="telefone" maxlength="14" placeholder="(XX) XXXX-XXXX" title="Informe o telefone"/> <br /><br /><br />

<label title="Informe o sexo"> 
Sexo: </label>

<input type="radio" name="sexo_usuario" id="masculino" value="" checked="checked" /> Masculino
<input type="radio" name="sexo_usuario" id="feminino"  value="" /> Feminino 
<br /><br />

CPF: <input type="text" id="cpf" title="Informe o CPF"/> <br /><br />

RG: <input type="text" name="rg_usuario" title="Informe seu RG"/> <br /><br />

UF: <input type="text" name="estado_usuario" title="Informe a Unidade Federativa"/> <br /><br />

<label title="Selecione um estado"> 
Estado: </label>

<select id="lista1" size="1" >
<option value="SP" selected="selected"> SP </option>
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
</select>
<br /><br />

Munic&iacute;pio: <input type="text" name="municipio_usuario" title="Informe o município"/> <br /><br />

Bairro: <input type="text" /> <br /><br />

CEP: <input type="text" title="Informe o CEP" name="cep_usuario"/> <br /><br />

Rua: <input type="text" title="Informe o bairro"/> <br /><br />

N&uacute;mero: <input type="text"size="5" title="Informe o bairro"/>

&nbsp &nbsp &nbsp Complemento: <input type="text" size="5" title="Informe o complemento" /> <br /><br />

Senha: <input type="password" name="senha_usuario" title="Informe a senha" /> <br /><br />

&nbsp &nbsp &nbsp &nbsp
<input type="submit" name="botao1" value="Cadastrar" /> &nbsp &nbsp &nbsp &nbsp
<input type="reset"  name="botao2" value="Limpar" /> <br /><br />

</form>
</body>
</html>