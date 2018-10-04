<?php
  include('header.php');
?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Tinn-R</span> <span class="white-text">Editor</span></h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern editor/word processor, perfect for R statistical language.</h5>
        </div>
        <div class="row center">
          <div class="col s6 m4 offset-m2">
            <a href="download.php" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Download</a> 
          </div>
          <div class="col s6 m4">
            <a href="download.php#patch" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Changelog</a>
          </div>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="assets/img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container" id="about">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h4 class="center grey-text text-darken-3">Key features</h4>
          <hr class="traced">
          <div class="row">
            <div class="col m6">
              <h5 class="grey-text text-darken-3"><a href="http://www.r-project.org/" target="_blank">R</a> Tools</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Recognizes Rgui.exe and Rterm.exe<br>
                  Supports RNOWEB (<a href="http://yihui.name/knitr/" target="_blank">Knitr</a></h5> and <a href="http://www.stat.uni-muenchen.de/~leisch/Sweave/" target="_blank">Sweave</a></h5>)<br>
                  Object explorer (graphical user interface - GUI for R with selection options and filter)<br>
                  Several optionsfor sending instructions (file, selection, blocks, lines) and control of the R interpreter<br>
                </div>
              </div>
            </div>
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Edit</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Advanced colouring of several languages' syntax<br>
                  Supports macros<br>
                  Completion (based on <a href="https://pt.wikipedia.org/wiki/XML" target="_blank">XML</a> database, customizable and expandable)<br>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Processing</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Basic support to <a href="http://pt.wikipedia.org/wiki/LaTeX">LaTeX</a><br>
                  Format conversion (<a href="http://johnmacfarlane.net/pandoc/" target="_blank">Pandoc</a>, <a href="http://txt2tags.org/" target="_blank">Txt2tags</a> and <a href="http://deplate.sourceforge.net/" target="_blank">Deplate</a>)<br>
                  Spell checkingfor multiple languages<br>
                  Search and substitutionon files and folders<br>
                </div>
              </div>
            </div>
            <div class="col m6">
              <h5 class="grey-text text-darken-3">Content Management</h5>
              <div class="row">
                <div class="col s1">
                  <i class="tiny material-icons orange-text text-darken-1">forward</i>
                </div>
                <div class="col s11 grey-text text-darken-1">
                  Interface for project management<br>
                </div>
              </div>
            </div>
          </div>
          <hr class="traced">
        </div>
      </div>
      <div class="row">
        <p class="center"><a href="download.php" id="download-button" class="btn waves-effect waves-light orange lighten-1">Download!</a></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col s12">
      <img class="responsive-img" src="assets/img/tinn.jpg">
    </div>
  </div>


  <?php
    include('footer.php');
  ?>
