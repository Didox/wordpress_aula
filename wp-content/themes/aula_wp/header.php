
<!DOCTYPE html>
<html>
  <head>
     
<title>TORNE-SE UM PROGRAMADOR</title>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,Node.js,C#,Ruby,Java,Asp,PHP,Wordpress,Aplicativos">
<meta name="author" content="Danilo Aparecido dos Santos">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="stylesheets/wow/css/libs/animate.css">
<link rel="stylesheet" type="text/css" href="http://www.torneseumprogramador.com.br/stylesheets/slick/slick.css">
<link rel="stylesheet" type="text/css" href="http://www.torneseumprogramador.com.br/stylesheets/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="http://www.torneseumprogramador.com.br/stylesheets/style.css">

<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:site" content="@didox">
<meta property="twitter:title" content="TORNE-SE UM PROGRAMADOR - Aprenda a desenvolver soluções">
<meta property="twitter:description" content="Com ele você irá aprender tudo que precisa para se tornar um programador.">
<meta property="twitter:image" content="http://www.torneseumprogramador.com.br/imagens/imggrath.png">

<meta property="og:site_name" content="TORNE-SE UM PROGRAMADOR">
<meta property="og:title" content="TORNE-SE UM PROGRAMADOR">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.torneseumprogramador.com.br/">
<meta property="og:image" content="http://www.torneseumprogramador.com.br/imagens/imggrath.png">
<meta property="og:description" content="">

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="http://www.torneseumprogramador.com.br/stylesheets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<script src="http://www.torneseumprogramador.com.br/stylesheets/wow/dist/wow.min.js"></script>

<link rel="stylesheet" href="<?php printf('%s/style.css', get_template_directory_uri()); ?>">

<!-- Initialize Swiper -->
<script type="text/javascript">

  $(function() {
    $('a').bind('click',function(event){
      var $anchor = $(this);
      $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1000,'swing');
        // Outras Animações
        // linear, swing, jswing, easeInQuad, easeInCubic, easeInQuart, easeInQuint, easeInSine, easeInExpo, easeInCirc, easeInElastic, easeInBack, easeInBounce, easeOutQuad, easeOutCubic, easeOutQuart, easeOutQuint, easeOutSine, easeOutExpo, easeOutCirc, easeOutElastic, easeOutBack, easeOutBounce, easeInOutQuad, easeInOutCubic, easeInOutQuart, easeInOutQuint, easeInOutSine, easeInOutExpo, easeInOutCirc, easeInOutElastic, easeInOutBack, easeInOutBounce
        });
            new WOW().init();
          });

    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
      });
    });

</script>


  </head>
  
  <body class="home">
    <nav class="navbar navbar-expand-lg navbar-dark nav-style">
      <div class="container">
        <a href="/">
          <img src="http://www.torneseumprogramador.com.br/imagens/icon.png" class="icon-tornese">
        </a>
        <a class="navbar-brand" style="font-weight: 900; text-align:center;" href="/">TORNE-SE UM <br> PROGRAMADOR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="padding-left: 4%;">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CURSOS
              </a>
              <div class="dropdown-menu dropdown-style" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/aulas/c-sharp">C-Sharp</a>
              <a class="dropdown-item" href="/aulas/front-end">HTML/CSS</a>
              <a class="dropdown-item" href="/aulas/danilo/javascript">Java Script</a>
              <a class="dropdown-item" href="/aulas/aplicativos">Phonegap/Titanium</a>
              <a class="dropdown-item" href="/aulas/php">PHP</a>
              <a class="dropdown-item" href="/aulas/ruby">Ruby on Rails</a>
              <a class="dropdown-item" href="/aulas/sql-server">SQL Server</a>
              <a class="dropdown-item" href="/aulas/wordpress">WordPress</a>
              <a class="dropdown-item" href="/aulas/negocios-tecnologicos">Negócios e Tecnologia</a>
              <a class="dropdown-item" href="/aulas/arquitetura">Arquitetura</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/MENTORIAS">MENTORIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/comunidade" target="_blank">COMUNIDADE</a>
          </li>
        </ul>

        <?php get_search_form(); ?>
        
        <form class="form-inline" action="/wordpress_aula" method="GET">
          <input class="form-control form-pesquisa" required
                type="text" id="aula" name="s" value="<?php echo $_GET["s"] ?>" placeholder="O que deseja?">
          <button class="btn btn-outline-dark btn-pesquisa">
            <ion-icon name="search" id="icon-pesquisa"></ion-icon>
          </button>
        </form>
      </div>
    </nav>