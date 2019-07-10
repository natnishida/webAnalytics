<!DOCTYPE html>
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
              <a class="navbar-brand" href="http://localhost/CodigoAnalytics">
                <img src="img/logo-cross373-fav.jpeg" alt="Logo do Cross373 - crosstraining" class="navbar-brand" width="100"/>
              </a>
              <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse bg-white" id="navbarNavDropdown">
                <!-- Lado Esquerdo do Menu -->
                <ul class="navbar-nav mr-auto p-3 p-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/CodigoAnalytics">Home <span class="sr-only">(Página atual)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#categorias">A Cross373</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#crosstraining">Sobre Crosstraining</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CodigoAnalytics/contato.php">Dúvidas?!</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/CodigoAnalytics/contato.php">Quer ganhar uma aula grátis?</a>
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
        <!-- Carrossel (só desktop) -->

              <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block" data-ride="carousel">
                    <div class="carousel-inner">

                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner-amigos-praticando-crossfit-barra.jpg?auto=yes&bg=777&fg=555&text=Second slide" alt="Amigos praticando crossfit juntos com barra">
                        <div class="carousel-caption rounded bg-dark">
                          <h2><strong>Cansou das academias? <br> Não consegue encontrar seu ritmo?</strong></h2>

                          <h3 class=" d-none d-md-block">Aqui é onde tudo vai mudar!</h3>
                          <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-light mt-2"><strong>Agende uma aula grátis!</strong></a>
                        </div>
                      </div>
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/banner-crosstraining-mulher-peso.png?auto=yes&bg=777&fg=555&text=First slide" alt="Mulher treinando crosstraining com pesos em academia">
                        <div class="carousel-caption rounded bg-dark">
                          <h2><strong>Cross 373</strong></h2>

                          <h3 class=" ">Acha que Cross não é pra você? <br> Vamos mudar essa ideia!</h3>
                          <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-light mt-2"><strong>Agende uma aula grátis!</strong></a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner-crossfit-homem-corda-naval.jpg?auto=yes&bg=777&fg=555&text=Third slide" alt="homem batendo corda naval em treino de crossfit treinamento funcional">
                        <div class="carousel-caption rounded bg-dark">
                          <h2><strong>Quer algo diferente e desafiador?</strong></h2>
                          <h3 class=" d-none d-md-block">Vem conhecer e entender por que a gente funciona!</h3>
                          <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-light mt-2"><strong>Agende uma aula grátis!</strong></a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
              </div>

      <!-- Fim do Carrossel -->


      <!-- Home Mobile -->

      <div class="home-mobile d-sm-block d-lg-none">
          <div class="home-mobile-div bg-dark rounded ml-5 mr-5 p-2">
              <a href="#categorias"><h1>CROSS 373</h1>
              <hr>
              <h2 class="home-mobile-texto">Você ganhou uma aula grátis!?</h2></a>
          </div>
      </div>

      <!-- Fim da Home Mobile -->

      <div class="mt-3 mb-0 d-flex flex-column justify-content-center" id="categorias">

            <div class=" chamada-categorias align-self-center p-2">
                <h1>Crosstraining é a novidade que finalmente vai te trazer pro lado saudável!</h1>
                  <h2>Confere aqui por que você deve praticar cross:</h2>
            </div>

      <!-- Início dos núcleos -->

            <ul class="container nav nav-pills d-flex flex-row justify-content-around bg-light" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active menu-pills" id="pills-especializacao-tab" data-toggle="pill" href="#pills-especializacao" role="tab" aria-controls="pills-especializacao" aria-selected="true">Especialização</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link menu-pills" id="pills-resultado-tab" data-toggle="pill" href="#pills-resultado" role="tab" aria-controls="pills-resultado" aria-selected="false">Resultado</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link menu-pills" id="pills-diversao-tab" data-toggle="pill" href="#pills-diversao" role="tab" aria-controls="pills-diversao" aria-selected="false">Diversão</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link menu-pills" id="pills-praticidade-tab" data-toggle="pill" href="#pills-praticidade" role="tab" aria-controls="pills-praticidade" aria-selected="false">Praticidade</a>
              </li>

            </ul>
            <div class="tab-content container p-sm-0 p-md-3 mb-4" id="pills-tabContent">

                <div class="tab-pane bg-light fade show active" id="pills-especializacao" role="tabpanel" aria-labelledby="pills-especializacao-tab">
                  <div class="media d-flex flex-column flex-lg-row">
                      <div class="flex-column flex-lg-row align-self-center img-categorias m-sm-0 m-md-3">
                        <img class="img-categorias align-self-center" src="img/crosstraining_especializacao.jpg" alt="Pessoas com kettlebell fazendo treinamento funcional ou crosstraining crossfit">
                      </div>
                      <div class="media-body m-3 txt-categorias align-self-center">
                        <h3 class="">Somos especializados em Crosstraining!</h3>
                        Não adianta estar em uma academia com uma grade de horários variada, mas nenhuma aula ser o que você precisa. Aqui somos <strong> especializados em Crosstraining!</strong> Isso significa que aqui você vai encontrar treinos que dão resultado e com uma equipe certificada e pronta pra te atender!
                        <br>
                        <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-dark mt-3">Agende sua aula grátis</a>
                      </div>
                  </div>
                </div>

                <div class="tab-pane bg-light fade" id="pills-resultado" role="tabpanel" aria-labelledby="pills-resultado-tab">
                  <div class="media d-flex flex-column flex-lg-row">
                      <div class="flex-column flex-lg-row align-self-center img-categorias m-sm-0 m-md-3">
                        <img class="img-categorias align-self-center" src="img/treinamento_funcional_resultado.jpg" alt="Mulher fazendo flexao para treino funcional ou crosstraining crossfit em academia">
                      </div>
                      <div class="media-body m-3 txt-categorias align-self-center">
                        <h3 class="">E especialistas em Resultado!</h3>
                        Exatamente por trabalharmos exclusivamente com o Crosstraining e Treinamento Funcional, garantimos treinos dinâmicos, divertidos e baseados nas capacidades físicas que precisamos pra nossa rotina real. Seja o seu objetivo emagrecer, definir, melhorar o condicionamento, ou simplesmente qualidade de vida, temos o treino perfeito para você! <br>
                        <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-dark align-self-center mt-3">Agende sua aula grátis</a>
                      </div>
                  </div>
                </div>

                <div class="tab-pane bg-light fade" id="pills-diversao" role="tabpanel" aria-labelledby="pills-diversao-tab">
                  <div class="media d-flex flex-column flex-lg-row">
                      <div class="flex-column flex-lg-row align-self-center img-categorias m-sm-0 m-md-3">
                        <img class="img-categorias align-self-center" src="img/crosstraining_diversao.jpg" alt="Duas mulheres com corda naval em treino crosstraining crossfit">
                      </div>
                      <div class="media-body m-3 txt-categorias align-self-center">
                        <h3 class="">Chega de academia!</h3>
                        Aquele treino de musculação que conhecemos muito bem não tem vez aqui! Os treinos são diferentes todos os dias, além de sempre serem montados pensando em diversão, superação e resultado! Sim, é possível se divertir enquanto se exercita! Não acredita? Vem aqui e deixa a gente te provar!<br>
                        <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-dark align-self-center mt-3">Agende sua aula grátis</a>
                      </div>
                  </div>
                </div>

                <div class="tab-pane bg-light fade" id="pills-praticidade" role="tabpanel" aria-labelledby="pills-praticidade-tab">
                  <div class="media d-flex flex-column flex-lg-row">
                      <div class="flex-column flex-lg-row align-self-center img-categorias m-sm-0 m-md-3">
                        <img class="img-categorias align-self-center" src="img/treinamento_funcional_praticidade.jpg" alt="Homem descansando apos treino crossfit e treinamento funcional">
                      </div>
                      <div class="media-body m-3 txt-categorias align-self-center">
                        <h3 class="">Treino que dura horas? Não mais!</h3>
                        30 minutos na esteira (ou bicicleta), depois pegar a ficha de treino e revezar aparelhos com mais outras pessoas. Sair da academia 3 horas depois, com a sensação que não se exercitou de verdade. Se essa rotina sempre te desanimou, temos uma novidade: aqui você não reveza aparelhos e, após 55 minutos, sai com a sensação de resultado. É ou não é o que você está procurando? <br>
                        <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-dark align-self-center mt-3">Agende sua aula grátis</a>
                      </div>
                  </div>
                </div>
            </div>
          </div>

      <!-- Final dos núcleos -->

      <!-- Sobre Crosstraining mobile-->
      <div id="crosstraining">

        <div class="sobre-crosstraining d-sm-block d-lg-none">
          <div class="sobre-crosstraining-div bg-dark rounded ml-4 mr-4 p-2">
            <h2>O que é Crosstraining?</h2>
            <hr>
            <p class="sobre-crosstraining-texto">Crosstraining é uma modalidade de alta intensidade e variação constante de exercícios, com treinos dinâmicos, alta queima calórica e definição muscular.</p>
            <p class="sobre-crosstraining-texto">O Cross traz benefícios físicos, como melhora de condicionamento, força física, equilíbrio, flexibilidade, perda de gordura, além de reduzir stress, melhorar sua confiança e auto estima!</p>
            <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-light mt-2"><strong>Agende sua aula grátis!</strong></a>
          </div>
        </div>
        <!-- Fim do Sobre Crosstraining -->
        <div class="fraseefeito bg-dark d-none d-lg-block mb-5">

          <hr>
          <h2 id="sobre">O Cross373 é pra você, que quer resultado!</h2>
          <hr>
        </div>

        <!-- Sobre Crosstraining desktop -->
        <div class="container d-none d-lg-flex flex-row mb-5">
          <div class="sobre-crosstraining-desktop col-6">

          </div>
          <div class="bg-light rounded p-4 col-6">
            <h2 class="sobre-crosstraining-titulo">O que é Crosstraining?</h2>
            <hr>
            <p class="sobre-crosstraining-texto">Crosstraining é uma modalidade de alta intensidade e variação constante de exercícios, com treinos dinâmicos, alta queima calórica e definição muscular.</p>
            <p class="sobre-crosstraining-texto">O Cross traz benefícios físicos, como melhora de condicionamento, força física, equilíbrio, flexibilidade, perda de gordura, além de reduzir stress, melhorar sua confiança e auto estima!</p>
            <div class="w-25 m-auto">
              <a href="http://localhost/CodigoAnalytics/contato.php" class="btn btn-dark mt-2"><strong>Agende sua aula grátis!</strong></a>
            </div>

          </div>
        </div>
        <!-- Fim do Sobre Crosstraining desktop -->
        <div class="fraseefeito bg-dark d-none d-lg-block mb-0 p-2">

          <hr>
          <h2 id="sobre">"Está esperando o que? Vem pra Cross373!"</h2>
          <hr>
        </div>
      </div>

      </main>

        <!-- Footer -->
      <footer class="page-footer font-small bg-dark" style="color:#FFF">
              <div class="d-flex justify-content-center align-items-center conecte_footer m-0 p-3">
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
                      <a href="#categorias">Sobre a Cross 373</a>
                    </p>
                    <p>
                      <a href="#crosstraining">Sobre Crosstraining</a>
                    </p>
                    <p>
                      <a href="http://localhost/CodigoAnalytics/contato.php">Fale com a gente</a>
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
                  <a href="http://localhost/CodigoAnalytics">www.cross373.com.br</a>
                </div>
      </footer>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
