<?php
  $title = "About us | Tinn-R";
  $description = "Learn all about the Tinn-R project. Know the development history, Read our E-BOOK, Meet the developers and see the screenshots of the software in operation.";
  include('header.php');
?>
  <div class="section">
    <div class="container" style="padding: 20px 0px 10px 0px;">
      <div class="row">
        <h4 class="center grey-text text-darken-2">About Tinn-R</h4>
      </div>
    </div>
  </div>

  <div class="section" style="padding: 0px 0px 30px 0px"> 
    <div class="container ">
      <div class="row ">
        <div class="col s12 m8">
          <p class="">The Tinn-R is an editor/word processor ASCII/UNICODE generic for the Windows operating system, very well integrated into the R, with characteristics of Graphical User Interface (GUI) and Integrated Development Environment (IDE).
          It is a project registered under the General Public License GPL, that is, an open source software.</p>
           <p class="">Tinn-R is an acdemical initiative, initiated and managed by PhD <a target="_blank" href="http://nbcgib.uesc.br/lec/professores/jcfaria/pag-pessoal/pt">José Cláudio Faria</a> from the Laboratory of Computational Statistics (LEC) belonging to the State University of Santa Cruz (UESC).</p>
           <a href="#screenshots">See the screenshots</a>
        </div>
        <div class="col s12 m4 right hide-on-small-only">
          <img class="responsive-img" src="../assets/img/1.png" alt="Notebook with Tinn-R installed">
        </div>
      </div>
      <div class="row">
        <div class="row center">
          <div class="col m3 s12 espaco"><a href="http://nbcgib.uesc.br/lec/download/ebooks/Tinn-R%20eBook_RII.pdf" id="download-button" class="btn waves-effect waves-light orange " target="_blank" >E-Book</a></div>
          <div class="col m3 s12 espaco"><a href="history" id="download-button" class="btn waves-effect waves-light orange" >Tinn-R history</a></div>
          <div class="col m3 s12 espaco"><a href="http://nbcgib.uesc.br/lec/" id="download-button" class="btn waves-effect waves-light orange" target="_blank" >About LEC</a></div>
          <div class="col m3 s12"><a href="http://www.uesc.br" id="download-button" class="btn waves-effect waves-light orange" target="_blank">About UESC</a></div>
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
          <h4 class="menor person-title grey-text text-darken-2">Coordination</h4>
        </div>
        <div class="col m8 offset-m1">
          <h5 class="menor"><a href="http://nbcgib.uesc.br/lec/professores/jcfaria/pag-pessoal/en" target="_blank">José Cláudio Faria</a></h5>
            Universidade Estadual de Santa Cruz<br>
            Departamento de Ciências Exatas e Tecnológicas - DCET<br>
            UESC / BA / BRAZIL <br> <br>
        </div>
      </div>
      <hr class="style14">
      <div class="row">
        <br>
        <div class="col m3">
          <h4 class="menor person-title grey-text text-darken-2">Active Developers</h4>
        </div>
        <div class="col m8 offset-m1">
          <div class="col m6 remove-pad-left">
            <h5 class="menor"><a href="http://nbcgib.uesc.br/lec/professores/jcfaria/pag-pessoal/en" target="_blank">José Cláudio Faria</a></h5>
              Brazil<br>
              <a href="mailto:joseclaudio.faria@gmail.com" class="sublinhado">joseclaudio.faria@gmail.com</a><br><br>
          </div>
          <div class="col m6 remove-pad-left">
            <h5 class="menor"><a href="#" onclick="return false;">Philiphe A. R. Kramer</a></h5>
              Switzerland<br>
              <a href="mailto:pharkrum@gmail.com" class="sublinhado">pharkrum@gmail.com</a><br><br>
          </div>
        </div>
      </div>
      <hr class="style14">
      <div class="row">
        <div class="col m3">
          <h4 class="menor person-title grey-text text-darken-2">Contributors</h4>
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
      <p class="center orange-text quote text-darken-3">Tinn-R would not be what it is without all contributors, thanks very much!</p>
    </div>
  </div>

    <div class="section " id="screenshots">
    <div class="container" style="padding: 20px 0px 10px 0px;">
      <div class="row">
        <h4 class="center">Screenshots</h4>
        <div class="row">
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/tinn.jpg" alt="Screenshot 1"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/explorer.jpg" alt="Screenshot 2"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/plot.jpg" alt="Screenshot 3"></div>
        </div>
        <div class="row">
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/options.jpg" alt="Screenshot 4"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/highlight.jpg" alt="Screenshot 5"></div>
          <div class="col m4"><img class="z-depth-1 materialboxed responsive-img" width="650" src="../assets/img/shortcurts.jpg" alt="Screenshot 6"></div>
        </div>
      </div>
    </div>
  </div>

  <?php
    include('footer.php');
  ?>
