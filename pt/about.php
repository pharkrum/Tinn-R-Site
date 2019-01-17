<?php
  $title = "Sobre o projeto | Tinn-R";
  $description = "Saiba tudo sobre o projeto Tinn-R. Conheça a história de desenvolvimento, Leia o nosso E-BOOK, Conheça os desenvolvedores e veja as capturas de telas do software em funcionamento.";
  include('header.php');
?>
  <div class="section">
    <div class="container" style="padding: 20px 0px 10px 0px;">
      <div class="row">
        <h4 class="center grey-text text-darken-2">Sobre o Tinn-R</h4>
      </div>
    </div>
  </div>

  <div class="section" style="padding: 0px 0px 30px 0px"> 
    <div class="container ">
      <div class="row ">
        <div class="col s12 m8">
          <p class="">O Tinn-R é um editor/processador de texto ASCII/UNICODE genérico para o sistema operacional Windows, muito bem integrado ao ambiente estatístico e computacional R para o qual possui características de Interface Gráfica (GUI) e Ambiente de Desenvolvimento Integrado (IDE).<br>É um projeto registrado sob a Licença Pública Geral GPL, sendo portanto software livre.</p>
           <p class="">O Tinn-R é uma iniciativa acâdemica, iniciada e gerenciada pelo Prof. Dr. <a href="http://nbcgib.uesc.br/lec/professores/jcfaria/pag-pessoal/pt">José Cláudio Faria</a> do Laboratório de Estatística Computacional (LEC) pertecente a Universidade Estadual de Santa Cruz (UESC).</p>
           <a href="#screenshots">Veja as Screenshoots</a>
        </div>
        <div class="col s12 m4 right hide-on-small-only">
          <img class="responsive-img" src="../assets/img/1.png" alt="Notebook usando o Tinn-r">
        </div>
      </div>
      <div class="row">
        <div class="row center">
          <div class="col m3 s12 espaco"><a href="http://nbcgib.uesc.br/lec/download/ebooks/Tinn-R%20eBook_RII.pdf" id="download-button" class="btn waves-effect waves-light orange " target="_blank" >E-Book</a></div>
          <div class="col m3 s12 espaco"><a href="history" id="download-button" class="btn waves-effect waves-light orange" >História do Tinn-R</a></div>
          <div class="col m3 s12 espaco"><a href="http://nbcgib.uesc.br/lec/" id="download-button" class="btn waves-effect waves-light orange" target="_blank" >Conheça o LEC</a></div>
          <div class="col m3 s12"><a href="http://www.uesc.br" id="download-button" class="btn waves-effect waves-light orange" target="_blank">Conheça a UESC</a></div>
        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
    hr.style14 { 
      border: 0; 
      height: 1px; 
      background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
    }
    .remove-pad-left{
      padding-left: 0 !important;
    }
    .quote{
      letter-spacing: 1px;
      font-size: 18px;
    }
    .person-title{
      font-weight: 300;
    }
    .contributor{
      font-size: 17px;
    }
    .contributor a{ 
      color: inherit; 
    }
    .sublinhado{
      color: inherit; 
      text-decoration: underline;
    }
    .contributors-subtitle{
      padding-left: 2px;
      margin-top: -15px;
    }
  </style>

  <div class="section card grey lighten-5">
    <div class="container">
      <div class="row">
        <div class="col m3">
          <h4 class="menor person-title grey-text text-darken-2">Coordenadores</h4>
        </div>
        <div class="col m8 offset-m1">
          <h5 class="menor"><a href="http://nbcgib.uesc.br/lec/professores/jcfaria/pag-pessoal/en" target="_blank">José Cláudio Faria</a></h5>
            Universidade Estadual de Santa Cruz<br>
            Departamento de Ciências Exatas e Tecnológicas - DCET<br>
            UESC / BA / BRASIL <br> <br>
        </div>
      </div>
      <hr class="style14">
      <div class="row">
        <br>
        <div class="col m3">
          <h4 class="menor person-title grey-text text-darken-2">Desenvolvedores Ativos</h4>
        </div>
        <div class="col m8 offset-m1">
          <div class="col m6 remove-pad-left">
            <h5 class="menor"><a href="http://nbcgib.uesc.br/lec/professores/jcfaria/pag-pessoal/en" target="_blank">José Cláudio Faria</a></h5>
              Brasil<br>
              <a href="mailto:joseclaudio.faria@gmail.com" class="sublinhado">joseclaudio.faria@gmail.com</a><br><br>
          </div>
          <div class="col m6 remove-pad-left">
            <h5 class="menor"><a href="#" onclick="return false;">Philiphe A. R. Kramer</a></h5>
              Suíça<br>
              <a href="mailto:pharkrum@gmail.com" class="sublinhado">pharkrum@gmail.com</a><br><br>
          </div>
        </div>
      </div>
      <hr class="style14">
      <div class="row">
        <div class="col m3">
          <h4 class="menor person-title grey-text text-darken-2">Contribuidores</h4>
          <!-- <p class="contributors-subtitle grey-text">Historical Order</p> -->
        </div>
        <div class="col m8 offset-m1">
          <br>
          <div class="row">
            <div class="col m4 contributor s12">
              Marco de Groot
            </div>
            <div class="col m4 contributor s12">
              <a href="http://phgrosjean.sciviews.org" target="_blank">Philippe Grosjean</a>
            </div>
            <div class="col m4 contributor s12">
              Huashan Chen
            </div>
          </div>
          <div class="row">
            <div class="col m4 contributor s12">
              <a href="http://nbcgib.uesc.br/lec/professores/enio/pag-pessoal" target="_blank">Enio Galinkin Jelihovschi</a>
            </div>
            <div class="col m4 contributor s12">
              <a href="http://duke.academia.edu/RicardoPietrobon">Ricardo Pietrobon</a>
            </div>
            <div class="col m4 contributor s12">
              Philipe Silva Farias
            </div>
          </div>
          <div class="row">
            <div class="col m4 contributor s12">
              Swami de P. Lima
            </div>
          </div>
        </div>
      </div>
      <p class="center orange-text quote text-darken-3">O Tinn-R não seria o que é sem todos os colaboradores, muito obrigado!</p>
    </div>
  </div>

    <div class="section grey lighten-5" id="screenshots">
    <div class="container" style="padding: 20px 0px 10px 0px;">
      <div class="row">
        <h4 class="center">Screenshots</h4>
        <div class="row">
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/tinn.jpg" alt="Foto da tela 1"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/explorer.jpg" alt="Foto da tela 2"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/plot.jpg" alt="Foto da tela 3"></div>
        </div>
        <div class="row">
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/options.jpg" alt="Foto da tela 4"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/highlight.jpg" alt="Foto da tela 5"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/shortcurts.jpg" alt="Foto da tela 6"></div>
        </div>
      </div>
    </div>
  </div>

  <?php
    include('footer.php');
  ?>
