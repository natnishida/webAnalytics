<?php
if (isset($_POST['BTEnvia'])) {

	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	//====================================================

	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//====================================================
	$email_remetente = "nat.angel@gmail.com"; // deve ser uma conta de email do seu dominio
	//====================================================

	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "nat.angel@gmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email";
	$email_assunto = "Contato com Cross373 - $assunto"; // Este será o assunto da mensagem
	//====================================================

	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n";
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n";
	$email_conteudo .= "Assunto = $assunto \n";
	$email_conteudo .= "Mensagem = $mensagem \n";
	//====================================================

	//Seta os Headers (Alterar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	//Enviando o email

}
?>

<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
		<!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis|Nunito|PT+Sans|Raleway" rel="stylesheet">

    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Favicon -->
		<link rel="shortcut icon"  href="img/favicon.ico"/>

		<title>Cross373 - Mais completo que Crossfit, agende seu treino com a gente!</title>
		<meta name="description" content="Mais do que Crossfit, temos um treino de Cross perfeito pra você que cansou de academia, de rotina, do mesmo treino sempre! O Cross373 foi feito pra você! Marque agora uma aula experimental gratuita!">

  </head>
  <body>

      <header>

        <nav class="navbar container navbar-expand-lg navbar-light p-0 p-lg-3">
              <a class="navbar-brand" href="http://localhost/webAnalytics-master/CodigoAnalytics">
                <img src="img/logo-cross373-fav.jpeg" alt="" class="navbar-brand" width="100"/>
              </a>
              <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse bg-white" style="z-index:10" id="navbarNavDropdown">
                <!-- Lado Esquerdo do Menu -->
                <ul class="navbar-nav mr-auto p-3 p-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/webAnalytics-master/CodigoAnalytics">Home <span class="sr-only">(Página atual)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/webAnalytics-master/CodigoAnalytics/#categorias">A Cross373</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/webAnalytics-master/CodigoAnalytics/#crosstraining">Sobre Crosstraining</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Fale com a gente!
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="http://localhost/webAnalytics-master/CodigoAnalytics/contato.php">Mande uma mensagem</a>
                      <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=5511999000839&text=Gostaria%20de%20saber%20mais%20sobre%20o%20cross" target="_blank" rel="noopener noreferrer">Mande um whatsapp</a>
                      <a class="dropdown-item" href="mailto:atendimento@cross373.com.br?Subject=Contato%20Cross373">Mande um e-mail</a>
                    </div>
                  </li>
                </ul>
                <!-- Lado Direito do Menu (icones contato/social) -->
								<ul class="navbar-nav nav-icones ml-auto pt-0 p-3 p-lg-0 d-flex flex-row">
									<li class="nav-item">
                    <a class="nav-link icones-sociais" id="facebook" href="https://www.facebook.com/cross373/" target="_blank" rel="noopener noreferrer"><img src="img/logo-facebook-crosstraining-academia.png" width="35px;" alt="logo do facebook da cross373 - crosstraining" ></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link icones-sociais" id="instagram" href="https://www.instagram.com/cross373sp/" target="_blank" rel="noopener noreferrer" ><img src="img/logo-instagram-crosstraining-academia.png" width="35px;" alt="logo do instagram da cross373 crosstraining"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link icones-sociais" id="whatsapp" href="https://api.whatsapp.com/send?phone=5511999000839&text=Gostaria%20de%20saber%20mais%20sobre%20o%20cross" target="_blank" rel="noopener noreferrer" ><img src="img/logo-whatsapp-crosstraining-academia.png" width="35px;" alt="logo do whatsapp da cross373 - crosstraining"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link icones-sociais" id="email" href="mailto:atendimento@cross373.com.br?Subject=Contato%20Cross373"><img src="img/logo-email-crosstraining-academia.png" width="35px;" alt="logo do email da cross373 - crosstraining"></a>
                  </li>
                </ul>
              </div>
          </nav>
      </header>

			<main>
				<div class="container-fluid row contato-bg">

					<div class="col-sm-12 col-lg-6 p-5 m-auto">
						 <h1>Você GANHOU uma aula! É GRÁTIS, agende agora!</h1>
							<?php
							if (isset($_POST['BTEnvia'])) {
							if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
											echo "<div class='alert alert-success' id='alert-success'>
												E-Mail enviado com sucesso!
														</div>";
										} else {
											echo "<div class='alert alert-danger'>
												Falha no envio dos dados, verifique.
														</div>";
										}
									}
							 ?>

							<form class="formContato" id="formContato" action="contato.php" method="POST">
								<div class="form-group">
									<label for="nomeFormContato">Nome:</label>
									<input type="text" class="form-control inputsForm" id="nomeFormContato" placeholder="Insira seu Nome Completo" name="nome">
									<span id="msgErroFormNome" class="msg-erro"></span>
								</div>
								<div class="form-group">
									<label for="emailFormContato">E-mail:</label>
									<input type="email" class="form-control" id="emailFormContato" placeholder="seuemail@email.com" name="email">
									<span id="msgErroFormEmail" class="msg-erro"></span>
								</div>
								<div class="form-group">
									<label for="telefoneFormContato">Telefone:</label>
									<input type="text" class="form-control" id="telefoneFormContato" placeholder="11 XXXXX-XXXX" name="telefone">
									<span id="msgErroFormTelefone" class="msg-erro"></span>
								</div>
								<div class="form-group">
									<label for="assuntoFormContato">Assunto:</label>
									<select class="form-control" id="assuntoFormContato" name="assunto">
										<option value="Agendamento">Agendamento de aula gratuita</option>
							      <option value="Duvida">Dúvida</option>
							      <option value="Outros">Outros</option>
							    </select>
								</div>
								<div class="form-group">
									<label for="telefoneFormContato">Mensagem:</label>
									<textarea class="form-control" id="exampleFormControlTextarea1 " rows="3" name="mensagem"></textarea>
								</div>

							<div class="d-flex align-self-center justify-content-center">
								<input class="btn btn-dark m-3 form-button" type="submit" name="BTEnvia" value="Enviar">
								<input class="btn btn-dark m-3" type="reset" name="BTApaga" value="Apagar">
							</div>
							</form>

					</div>
					<div class="col-sm-12 col-lg-6 p-5 align-self-center justify-content-center">
						<div class="d-flex flex-column align-self-center justify-content-center">
							<h6 class="text-uppercase font-weight-bold" style="text-align: center">Contato</h6>
							<hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
							<p> Av. Nossa Senhora da Encarnação, 373. Jd. Maria Estela, SP</p>
							<p>11 2947-2005</p>
							<p>11 99900-0839 (Vivo)</p>
							<a href="mailto:atendimento@cross373.com.br?Subject=Contato%20Cross373" style="text-align: center"><p>atendimento@cross373.com.br</p></a>
						</div>
							<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.155006122538!2d-46.60213738495574!3d-23.63461927018696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b5c452b6593%3A0x873bb7d326cce2eb!2sAv.+Nossa+Sra.+da+Encarna%C3%A7%C3%A3o%2C+373+-+Sacom%C3%A3%2C+S%C3%A3o+Paulo+-+SP%2C+04180-080!5e0!3m2!1spt-BR!2sbr!4v1536605082364" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</main>
			<!-- Footer -->
		<footer class="page-footer font-small bg-dark" style="color:#FFF">
						<div class="d-flex justify-content-center align-items-center conecte_footer m-1 p-3">
							 Conecte-se em nossas redes sociais!
						</div>

						<div class="imgicone d-flex justify-content-center align-items-center p-1">
							<a href="https://www.facebook.com/cross373/" target="_blank" rel="noopener noreferrer"><img src="img/face.png" width="35px;"></a>
							<a href="https://www.instagram.com/cross373sp/" target="_blank" rel="noopener noreferrer"><img src="img/inst.png" width="35px;"></a>
							<a href="mailto:atendimento@cross373.com.br?Subject=Contato%20Cross373"><img src="img/email.png" width="35px;"></a>
						</div>
						<hr class="bg-light">

						<div class="container text-center text-md-left mt-3">
							<div class="row mt-3 d-flex justify-content-around texto-footer">

								<div class="col-md-4 mb-4">
									<h6 class="text-uppercase font-weight-bold">Cross 373</h6>
									<hr class="bg-light accent-2 mb-4 mt-0 d-inline-block" style="width: 60px;">
									<p class="pl-3 pr-3">Procurando uma academia na região da Vila das Mercês, Vila Morais, Jardim Maria Estela, Jardim Botucatu?
									<br>Está na hora de experimentar algo novo e que funciona, um Box de Cross e Treinamento Funcional, com profissionais especializados e treinos de 1 hora, dinâmicos, divertidos e com resultado! </p>
								</div>

							<div class="col-md-4 mx-auto mb-4 links-footer ">
									<h6 class="text-uppercase font-weight-bold">Links úteis</h6>
									<hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
									<p>
										<a href="http://localhost/webAnalytics-master/CodigoAnalytics/#categorias">Sobre a Cross 373</a>
									</p>
									<p>
										<a href="http://localhost/webAnalytics-master/CodigoAnalytics/#crosstraining">Sobre Crosstraining</a>
									</p>
									<p>
										<a href="http://localhost/webAnalytics-master/CodigoAnalytics/contato.php">Fale com a gente</a>
									</p>

								</div>

								<div class="col-md-4 ">
									<h6 class="text-uppercase font-weight-bold">Contato</h6>
									<hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
									<p> Av. Nossa Senhora da Encarnação, 373</p>
									<p>Jd. Maria Estela, SP</p>
									<p>11 2947-2005</p>
									<p>11 99900-0839 (Vivo)</p>
									<a href="mailto:atendimento@cross373.com.br?Subject=Contato%20Cross373">atendimento@cross373.com.br</a>

								</div>

							</div>
							<div class="row d-flex justify-content-around texto-footer">
								<div class="col-md-12 ">
									<p>Bairros próximos: Vila Morais, Vila das Mercês, Jardim Maria Estela, Jardim Botucatu, Sacomã, Parque Fongaro, Vila Arapuã, Jardim Patente, Jardim Vergueiro, Jardim Climax.</p>
									<p>Pontos de referência: 850m do SESI Vila das Mercês, 500m do Shopping Via80, 900m da Paróquia Nossa Senhora das Mercês, 1km da UNIP Anchieta, 1km do Objetivo Pedroso, 900m do EMEI Mario Marques e Serra, 1,5km do Carrefour Anchieta.</p>
								</div>
							</div>
						</div>
							<div class="footer-copyright text-center py-3">© 2018 Copyright:
								<a href="http://localhost/webAnalytics-master/CodigoAnalytics">www.cross373.com</a>
							</div>
		</footer>



	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>
