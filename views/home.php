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

<div class="container" id="entrada"><br><br><br><br>
<h3 id="titulo_entrada">Bem-Vindo!</h3>
<p class="txt_entrada">Você está na minha página pessoal, espero que goste!</p>
<p class="txt_entrada">Abaixo estão algumas das minhas informações:</p>
<br>
</div>

<center>
<div class="container" id="info">
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
      <p class="txt_intro" id="txtPessoal">Aqui há algumas informações básicas sobre mim, clique no botão abaixo e veja!</p>

     <button style="background-color: #198f89;" id="bttn_descPessoal_mostrar" class="btn btn-primary">Ver mais...</button>
     </div>
    <div class="col-6">
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
</div><br><br><br>
</center>

<div class="container" style="width: 60%;" id="info">
  <div class="row">
    <div class="col">
      FORMAÇÃO ACADÊMICA
    </div>
    <div class="col">
      EXPERIÊNCIA PROFISSIONAL
    </div>
  </div>
</div><br><br><br>

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

<?php
  include_once "footer_home.php";
  ?>
</body>
</html>