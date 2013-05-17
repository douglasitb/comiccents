
<!DOCTYPE html>
<html>
<head>
<title></title>   

<link rel="icon" href="imgens/4741_128x128.png" sizes="">

<link rel="stylesheet" type="text/css" href="estilos.css" />

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
echo "<h1>Home - Page</h1>
    <a href=adm/frmloginAdm.php>Efetuar Login</a>";
 
?>
    
    
 <section id="principal">
 
	  <section id="cabecalho">
		  <header> 
		  <img class="esquerda" src="logos_oficiais.png" />
		  
		  
		  <h1><center><p> 
		  
		 
		  <a class="link_titulo" href="missao.html" target="quadro"> Missão </a> &nbsp &nbsp &nbsp &nbsp 

		 <a class="link_titulo" href="suporte.html" target="quadro">Suporte </a> &nbsp &nbsp  &nbsp &nbsp	

		 <a class="link_titulo" href="filiais.html" target="quadro">Filiais </a> &nbsp &nbsp  &nbsp &nbsp  

		 <a class="link_titulo" href="contato.html" target="quadro"> Contato </a>
   </p></center></h1> 
		  </header>
	  </section>
	  
	  <section id="menu_principal">
		  
		  <p><h1><center>Produto</center></h1></p>
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
				  
				   <form name="login">
				   <p><h1><center>Área Restrita</center></h1></p>
				   
				   <h2>Usuário :</h2> <input type="text" name="fname" size="17" />
				   
				   <h2>Senha :</h2> <input type="password" name="fsenha" size="17"/>
				   					
				   <center><input type="button" value="    Entrar     " onClick="flogin()"/><br /></center><br />
				  </form>
				  
				  <a href = "www.fieb.edu.br"> Cadastre-se</a>
				  
				  
	  </section>
	  
	  
	  <section id="conteudo">
	  
	  <article>
     	
		<iframe src = "telefones.html" width="845px" height="710px" name="quadro" frameborder="0">
				
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