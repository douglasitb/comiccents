
<!DOCTYPE html>
<html>
<head>
<title></title>   

<link rel="icon" href="imgens/4741_128x128.png" sizes="">

<link rel="stylesheet" type="text/css" href="css/estilo.css" />

<script language="JavaScript">
	
	function flogin() {
	 
	var controle=0;
	var username= document.login.fname.value;
	username=username.toLowerCase();
	var password=document.login.fsenha.value;
	password=password.toLowerCase();
	
	if (username=="joao" && password=="adm"){
		window.location="restrito.html";controle=1;}	
		
	if (username=="maria" && password=="mod"){
		window.location="restrito.html";controle=1;}
		
	if (username=="teste" && password=="site"){
		window.location="restrito.html";controle=1;}
		
	if (controle==0)
	
	{alert("Senha ou usuário inválido.");
	
	}  
	
	
	}

</script>

</head>


<body>
    
<?php

echo "<h1>RES- Page</h1>
    <a href=frmlogin.html>Efetuar Login</a>";

echo "<h1>ADM - Page</h1>
    <a href=adm/frmloginAdm.php>Efetuar Login</a>";
 
?>
    
    
 <section id="principal">
 
     <img src="1188651134909.jpg"/>
	  <section id="cabecalho">
		  <header> 
		  <img class="esquerda" src="imagens/logo_oficial.png" />
                  
		  
		  
		  <h1><center><p> 
		  
		 
		  <a class="link_titulo" href="missao.html" target="quadro"> Home </a> &nbsp &nbsp &nbsp &nbsp 

		 <a class="link_titulo" href="suporte.html" target="quadro">HQ's Marvel </a> &nbsp &nbsp  &nbsp &nbsp	

		 <a class="link_titulo" href="filiais.html" target="quadro">HQ's DC Comic </a> &nbsp &nbsp  &nbsp &nbsp  

		 <a class="link_titulo" href="contato.html" target="quadro"> HQ's Image Comic </a> &nbsp &nbsp  &nbsp &nbsp
                 
                 <a class="link_titulo" href="contato.html" target="quadro"> Mangás </a>
   </p></center></h1> 
		  </header>
	  </section>
	  
	  <section id="menu_principal">
		  
	<form action="frmlogin.html" method="post">
		<p><h1><center>Área Restrita</center></h1></p>
				   
		<h2>Usuário :</h2> <input type="text" name="fusuario" size="17" />
				   
		<h2>Senha :</h2> <input type="password" name="fsenha" size="17"/>
				   					
		<center><input type="button" value="Entrar" action="login.php"/></center> 
	</form>  
              
              
              <h1><span><center>Produto</center></span></h1>
		  <h2><a href="telefones.html" target="quadro">Mobile</a><br />
		  <a href="impressoras.html" target="quadro">Impressoras</a><br />
		  <a href="som.html" target="quadro">Som</a><br />
		  <a href="imagens.html" target="quadro">Imagem</a><br />
		  <a href="games.html" target="quadro">Games</a><h2/>
		  
			  <p><h1><center>Novidades</center></h1></p>
			  <h2><a href="trab_mobile.html" target="quadro">Mobile</a><br />
			 <a href="trab_processadores.html" target="quadro"> Processadores</a><br />
			  <a href="trab_interoperabilidade.html" target="quadro"> Interoperabilidade</a><br />                                                   
			  <h2/><br />
				  
				   
				  
				  <a href = "www.fieb.edu.br"> Cadastre-se</a>
				  
				  
	  </section>
	  
	  
	  <section id="conteudo">
	  
	  <article>
     	
		<iframe src = "telefones.html" width="845px" height="710px" name="quadro" frameborder="5px">
				
		</iframe>
				
		
	  </article>
	  
	  
	  </section>
	  
	  <section id="principal"><br />

    <audio id="audio" autoplay="autoplay" loop="loop">
		<source src="Audio/01-abba-dancing_queen.mp3" type="audio/mp3"/>
	</audio>
      

</section>
	  
	  
	  <section id="rodape">
			  <footer>
			   <p><center> Copyright 2001-2011. </center></p>
				</footer>
	  </section>

 </section>
	   
</body>
</html>