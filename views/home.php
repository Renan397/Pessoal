<!DOCTYPE html>
<html lang="PT-BR">
<?php
    include_once "config/config.php";
  $css_file = $css."home.css";
  $js_file = $js."home.js";
  $img_files = array();
  $img_files[0] = $img."logo.png";
  $img_files[1] = $img."img_info_pessoais_intro.png";
  ?>
<head>
    <meta charset="UTF-8">
    <!-- jQuery e CSS Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="<?=$img_files[0]?>">
    <!-- Arquivos locais -->
    <link rel="stylesheet" href="<?=$css_file?>">
    <script src="<?=$js_file?>"></script>
    <title>Currículo - Bem-vindo!</title>
</head>
<header>
  <?php
  include_once "views/menu_home.php";
  ?>
</header>
<body>

<div class="container" id="entrada">
<h3 id="titulo_entrada">Bem-Vindo!</h3>
<p class="txt_entrada">Você está na minha página pessoal, espero que goste!</p>
<p class="txt_entrada">Abaixo estão algumas das minhas informações.</p>
</div>

<div id="info_redirect" style="height: 5px;"></div><br>
<center>
<div class="container" id="info">
  <!-- SESSÃO DE INFORMAÇÕES PESSOAIS -->
  <h3><span style="color: #198f89;">✱</span> Sessão 1 - Informações Pessoais <span style="color: #198f89;">✱</span></h3><br>
  <div class="row">
    <div class="col-6" id="info_pessoais">
    <h4 class="titulos" >Informações Pessoais</h4><br>
    <img class="imgs" id="img_perfil" src="assets/img/img_perfil.png" style="box-shadow: 0 0 1em #57a8f3; border-radius: 5%; display:none; border: 3px inset #198f89;">
      <p id="txt_perfil" style="display: none; padding-top: 10px;"><b>Nome:</b> Renan Siqueira dos Santos;<br>
        <b>Data de nascimento</b> 18/06/2003;<br>  
        <b>Local de nascimento:</b> Guarulhos - SP;<br>
        <b>Nacionalidade:</b> Brasileira;<br>
        <b>Gênero:</b> Masculino.<br>
      </p>
      <button style="background-color: #198f89; display:none;" id="bttn_descPessoal_esconder" class="btn btn-primary">Voltar</button>

      <img class="imgs_intro" id="imgPessoal" src="assets/img/img_info_pessoais_intro.png"><br><br>
      <p class="txt_intro" id="txtPessoal">Aqui há algumas informações básicas sobre mim.</p>

     <button style="background-color: #198f89;" id="bttn_descPessoal_mostrar" class="btn btn-primary">Ver mais...</button>
     </div>

    <div class="col-6" id="info_hobbies">
    <h4 class="titulos" >Hobbies</h4><br>
    <img class="imgs" id="img_hobbies" src="assets/img/img_hobbies.png" style="display:none;">
      <p id="txt_hobbies" style="display: none; padding-top: 10px;">
      Quando não estou em um momento de estudo, as coisas que eu mais gosto de fazer são: Programar, assistir vídeos no <span style="color: red;"><b>Youtube</b></span>, jogar jogos (isso aqui eu faço muito), assistir à algum jogo de <span style="color: green;"><b>futebol</b></span> ou <span style="color: orange;"><b>basquete</b></span>, meu momento de descanso e de praticar atividades se resume a isso, basicamente.
      </p>
      <button style="background-color: #198f89; display:none;" id="bttn_descHobbies_esconder" class="btn btn-primary">Voltar</button>

      <img class="imgs_intro" id="imgHobbies" src="assets/img/img_hobbies_intro.png"><br><br>
      <p class="txt_intro" id="txtHobbies">Aqui há alguns hobbies, ou seja, coisas que eu gosto de fazer no meu tempo livre.</p>

     <button style="background-color: #198f89;" id="bttn_descHobbies_mostrar" class="btn btn-primary">Ver mais...</button>
    </div>
  </div>
  <!-- -->
</div><br><br>
</center>

<div id="formacao_redirect" style="height: 5px;"></div><br>
<center>
<div class="container" id="formacao">
   <!-- SESSÃO DE FORMAÇÃO ACADÊMICA E PROFISSIONAL -->
<h3><span style="color: #198f89;">✱</span> Sessão 2 - Formação <span style="color: #198f89;">✱</span></h3><br>
  <div class="row">
    <div class="col-6">
    <h4 class="titulos" >Formação Acadêmica</h4><br>
    <p class="txt_academica" style="display: none; padding-top: 10px;">
        <b>Ensino Fundamental (1º ao 9º ano):</b> E.E. Agostinho Cano.<br>
    </p>
    <img class="imgs" id="img_academica1" src="assets/img/img_academica1.jpg" style="border-radius: 50%; display:none; padding-bottom: 20px;">
    
    <p class="txt_academica" style="display: none; padding-top: 10px;">
        <b>Ensino Médio - Técnico em Informática para Internet (1º ao 4º ano):</b> Instituto Federal de Educação, Ciência e Tecnologia de São Paulo (IFSP Guarulhos).<br>
    </p>
    <img class="imgs" id="img_academica2" src="assets/img/img_academica2.jpg" style="border-radius: 50%; display:none;">
    
    <p class="txt_academica" style="display: none; padding-top: 10px">
        Atualmente estou cursando o quarto e último ano do Ensino Médio-Técnico no IFSP Guarulhos. <br>
    </p>
    <button style="background-color: #198f89; display:none;" id="bttn_descAcademica_esconder" class="btn btn-primary">Voltar</button>

      <img class="imgs_intro" id="imgAcademica" src="assets/img/img_academica_intro.png"><br><br>
      <p class="txt_intro" id="txtAcademica">Algumas informações sobre minha formação acadêmica.</p>

     <button style="background-color: #198f89;" id="bttn_descAcademica_mostrar" class="btn btn-primary">Ver mais...</button>
    </div>
    <div class="col-6">
    <h4 class="titulos" >Experiência Profissional</h4><br>
   
    <img class="imgs" id="img_profissional" src="assets/img/img_profissional.png" style="border-radius: 50%; display: none; padding-bottom: 20px;">
    <p id="txt_profissional" style="display: none; padding-top: 10px;">
        Atualmente sou desenvolvedor Front-end da <span style="color: #0069b3;"><b>TRL Sites</b></span>, uma empresa criada por mim e meus colegas para o projeto de formatura do curso de Informática para Internet.<br><br>
        Clique neste link para entrar em nosso site: <a target="blank" href="https://projetos.talentosdoifsp.gru.br/trlsites/" style="text-decoration: none;">TRL Sites</a>
    </p>

    <button style="background-color: #198f89; display:none;" id="bttn_descProfissional_esconder" class="btn btn-primary">Voltar</button>

      <img class="imgs_intro" id="imgProfissional" src="assets/img/img_profissional_intro.png"><br><br>
      <p class="txt_intro" id="txtProfissional">Algumas informações sobre minha formação e experiência profissional.</p>

     <button style="background-color: #198f89;" id="bttn_descProfissional_mostrar" class="btn btn-primary">Ver mais...</button>
    </div>
  </div>
  <!-- -->
</div><br><br>
</center>

<div class="container" style="width: 60%;" id="info">
  <div class="row">
    <div class="col">
      COMPETÊNCIAS
    </div>
    <div class="col">
      IDIOMAS
    </div>
  </div>
</div><br><br><br>

<!-- CAROUSEL DE IMAGENS (PORTFOLIO)-->
<div style="display: none;" id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/img_hobbies_intro.png" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="assets/img/img_hobbies_intro.png" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="assets/img/img_hobbies_intro.png" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<?php
  include_once "footer_home.php";
  ?>
</body>
</html>