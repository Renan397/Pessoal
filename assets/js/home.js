function entrou_carrossel() {
  document.getElementById("botao_anterior").style.display = "block";
  document.getElementById("botao_proxima").style.display = "block";
}
function saiu_carrossel() {
  document.getElementById("botao_anterior").style.display = "none";
  document.getElementById("botao_proxima").style.display = "none";
}

$(document).ready(function(){
    //Sessão de Informações Pessoais
    $("#bttn_descPessoal_mostrar").click(function(){
        $("#bttn_descPessoal_mostrar").hide();
        $("#bttn_descPessoal_esconder").fadeToggle();
        $("#imgPessoal").hide();
        $("#txtPessoal").hide();
        $("#img_perfil").fadeToggle();
        $("#txt_perfil").fadeToggle();
      });
      $("#bttn_descPessoal_esconder").click(function(){
        $("#bttn_descPessoal_esconder").hide();
        $("#bttn_descPessoal_mostrar").fadeToggle();
        $("#imgPessoal").fadeToggle();
        $("#txtPessoal").fadeToggle();
        $("#img_perfil").hide();
        $("#txt_perfil").hide();
      });
      //

      //Sessão de Hobbies
      $("#bttn_descHobbies_mostrar").click(function(){
        $("#bttn_descHobbies_mostrar").hide();
        $("#bttn_descHobbies_esconder").fadeToggle();
        $("#imgHobbies").hide();
        $("#txtHobbies").hide();
        $("#img_hobbies").fadeToggle();
        $("#txt_hobbies").fadeToggle();
      });
      $("#bttn_descHobbies_esconder").click(function(){
        $("#bttn_descHobbies_esconder").hide();
        $("#bttn_descHobbies_mostrar").fadeToggle();
        $("#imgHobbies").fadeToggle();
        $("#txtHobbies").fadeToggle();
        $("#img_hobbies").hide();
        $("#txt_hobbies").hide();
      });
      //

      //Sessão de Formação Acadêmica
      $("#bttn_descAcademica_mostrar").click(function(){
        $("#bttn_descAcademica_mostrar").hide();
        $("#bttn_descAcademica_esconder").fadeToggle();
        $("#imgAcademica").hide();
        $("#txtAcademica").hide();
        $("#img_academica1").fadeToggle();
        $("#img_academica2").fadeToggle();
        $(".txt_academica").fadeToggle();
      });
      $("#bttn_descAcademica_esconder").click(function(){
        $("#bttn_descAcademica_esconder").hide();
        $("#bttn_descAcademica_mostrar").fadeToggle();
        $("#imgAcademica").fadeToggle();
        $("#txtAcademica").fadeToggle();
        $("#img_academica1").hide();
        $("#img_academica2").hide();
        $(".txt_academica").hide();
      });
      //

      //Sessão de Formação Profissional
      $("#bttn_descProfissional_mostrar").click(function(){
        $("#bttn_descProfissional_mostrar").hide();
        $("#bttn_descProfissional_esconder").fadeToggle();
        $("#imgProfissional").hide();
        $("#txtProfissional").hide();
        $("#img_profissional").fadeToggle();
        $("#txt_profissional").fadeToggle();
      });
      $("#bttn_descProfissional_esconder").click(function(){
        $("#bttn_descProfissional_esconder").hide();
        $("#bttn_descProfissional_mostrar").fadeToggle();
        $("#imgProfissional").fadeToggle();
        $("#txtProfissional").fadeToggle();
        $("#img_profissional").hide();
        $("#txt_profissional").hide();
      });
      //

      //Sessão de Competências
      $("#bttn_descCompetencias_mostrar").click(function(){
        $("#bttn_descCompetencias_mostrar").hide();
        $("#bttn_descCompetencias_esconder").fadeToggle();
        $("#imgCompetencias").hide();
        $("#txtCompetencias").hide();
        $("#img_competencias").fadeToggle();
        $("#txt_competencias").fadeToggle();
      });
      $("#bttn_descCompetencias_esconder").click(function(){
        $("#bttn_descCompetencias_esconder").hide();
        $("#bttn_descCompetencias_mostrar").fadeToggle();
        $("#imgCompetencias").fadeToggle();
        $("#txtCompetencias").fadeToggle();
        $("#img_competencias").hide();
        $("#txt_competencias").hide();
      });
      //

      //Sessão de Idiomas
      $("#bttn_descIdiomas_mostrar").click(function(){
        $("#bttn_descIdiomas_mostrar").hide();
        $("#bttn_descIdiomas_esconder").fadeToggle();
        $("#imgIdiomas").hide();
        $("#txtIdiomas").hide();
        $("#img_idiomas").fadeToggle();
        $("#txt_idiomas").fadeToggle();
      });
      $("#bttn_descIdiomas_esconder").click(function(){
        $("#bttn_descIdiomas_esconder").hide();
        $("#bttn_descIdiomas_mostrar").fadeToggle();
        $("#imgIdiomas").fadeToggle();
        $("#txtIdiomas").fadeToggle();
        $("#img_idiomas").hide();
        $("#txt_idiomas").hide();
      });
      //
  });