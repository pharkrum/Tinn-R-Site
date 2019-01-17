<?php
  $title = "IDE/Editor para Linguagem R | Tinn-R";
  $description = "Baixe o Tinn-R gratuitamente. O Tinn-R é uma interface gráfica e ambiente para linguagem R. O Tinn-R é open source e grátis. É um editor/processador de texto generico para windows, muito bem integrado com o R, incluindo interface gráfica (GUI) e ambiente de desenvolvimento integrado(IDE).";
  include('header.php');
?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Tinn-R</span> <span class="white-text">Editor</span></h1>
        <div class="row center">
          <h5 class="header col s12 light">Um moderno editor/processador de texto perfeito para a linguagem estatística R.</h5>
        </div>
        <div class="row center">
          <div class="col s6 m4 offset-m2">
            <a href="download" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Download</a> 
          </div>
          <div class="col s6 m4">
            <a href="download#patch" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Novidades</a>
          </div>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="../assets/img/background1.jpg" alt="Imagem de fundo inicial"></div>
  </div>

  <div class="container" id="about">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h4 class="center grey-text text-darken-3">Características</h4>
          <hr class="traced">
          <div class="row">
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Ferramentas <a href="http://www.r-project.org/" target="_blank">R</a></h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Reconhece Rgui.exe e Rterm.exe<br>
                  Suporta RNOWEB (<a href="http://yihui.name/knitr/" target="_blank">Knitr</a></h5> e <a href="http://www.stat.uni-muenchen.de/~leisch/Sweave/" target="_blank">Sweave</a></h5>)<br>
                  Interface gráfica para o R com opções de seleção e filtro<br>
                  Envio de instruções por arquivo, seleção, blocos, linhas e controle do interpretador R<br>
                </div>
              </div>
            </div>
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Edição</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Colorimento avançado da sintaxe de várias linguagens<br>
                  Suporte a macros<br>
                  Auto complete (baseada em banco de dados <a href="https://pt.wikipedia.org/wiki/XML" target="_blank">XML</a>, expansível e customizável)<br>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Processamento</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Suporte básico ao <a href="http://pt.wikipedia.org/wiki/LaTeX">LaTeX</a><br>
                  Conversão de formatos (<a href="http://johnmacfarlane.net/pandoc/" target="_blank">Pandoc</a>, <a href="http://txt2tags.org/" target="_blank">Txt2tags</a> e <a href="http://deplate.sourceforge.net/" target="_blank">Deplate</a>)<br>
                  Correção ortográfica para vários idiomas<br>
                  Busca substituição em arquivos e pastas<br>
                </div>
              </div>
            </div>
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Gerenciamento</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Interface para gerenciamento de projetos<br>
                </div>
              </div>
            </div>
          </div>
          <hr class="traced">
        </div>
      </div>
      <div class="row">
        <p class="center"><a href="download" id="download-button" class="btn waves-effect waves-light orange lighten-1">Baixe agora!</a></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col s12">
      <img class="responsive-img" src="../assets/img/tinn.jpg" alt="Captura de tela do Tinn-r">
    </div>
  </div>


  <?php
    include('footer.php');
  ?>
