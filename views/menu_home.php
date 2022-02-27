<?php
    include_once "config/config.php";
  $img_files = array();
  $img_files[1] = $img."logo.png";
  $img_files[2] = $img."img_menu_split.png";
?>
<style>
  .nav-link {
    color: white;
  };
</style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dar" style="position: fixed; width: 100%; z-index: 3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?=$img_files[1]?>" style="height: 50px; width: 50px;"></a>
    <button class="navbar-toggler" style="background-color: #198f89;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <img src="<?=$img_files[2]?>" style="height: 20px; width: 20px;">
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#info_redirect">Informações</a>
      </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Formação</a>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#formacao_redirect">Acadêmica</a></li>
    <li><a class="dropdown-item" href="#formacao_redirect">Profissional</a></li>
  </ul>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#competencias_redirect">Competências</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#portfolio_redirect">Portfólio</a>
    </li>
      </ul>
    </div>
  </div>
</nav>