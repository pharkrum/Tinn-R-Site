<?php
  include('header.php');
?>

  <div class="section">
    <div class="container" style="padding: 20px 0px 10px 0px;">
      <div class="row">
        <h4 class="center grey-text text-darken-2">Baixe o Tinn-R</h4>
        <h6 class="center grey-text text-darken-2">Disponível para Windows <i class="fa fa-windows"></i></h6>
      </div>
    </div>
  </div>

  <div class="section" style="padding: 0px 0px 30px 0px">
    <div class="container">
      <div class="row">
        <div class="col s12 m4 offset-m2">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Tinn-R Setup</span>
              <p>Executável em versão desktop para o sistema operacional Windows.<br>&nbsp</p>
            </div>
            <?php
			$url="http://nbcgib.uesc.br/lec/update/new_version.txt";
			$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

			//Utilizando php CURL para acessar URL's.
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_VERBOSE, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			curl_setopt($ch, CURLOPT_URL,$url);
			$download_link=curl_exec($ch);
			?>
            <div class="card-action center">
              <a class="waves-effect waves-light btn orange lighten-1"  href="<?php echo $download_link;?>"><i class="material-icons left">file_download</i>Download</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Versão Portável</span>
              <p>Versão portável que funciona a partir de qualquer pasta de nuvem sincronizada, de uma unidade externa ou interna.</p>
            </div>
            <div class="card-action center">
              <a class="waves-effect waves-light btn orange lighten-1" href="https://ufpr.dl.sourceforge.net/project/tinn-r/Tinn-R%20Portable/4.0.3.5/Tinn-R%20Portable_04.00.03.05.zip"><i class="material-icons left">file_download</i>Download</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 center"> 
          <a href="#patch">Veja as notas de atualização</a>
        </div>
      </div>
      <br>
    </div>
  </div>

  <div class="section grey lighten-3" style="padding: 80px 0px 80px 0px; background-image: url(assets/img/lines.jpg); background-size: cover">
    <div class="container">
      <div class="row center">
        <div class="col m2 s4 offset-m1 hide-on-small-only">
          <img class="responsive-img"  src="assets/img/opensource.png">
        </div>
        <div class="col m8 s12">
          <div class="row">
            <h5>Open Source e Freeware</h5>
            <p class="spaced">Baixe o nosso código fonte a qualquer momento, se torne também um desenvolvedor. Fork it!</p>
            <a href="https://github.com/jcfaria/Tinn-R" id="download-button" class="btn waves-effect waves-light orange lighten-1 espaco" target="_blank">Código Fonte (GitHub <i class="fa fa-github"></i>)</a>
            <a href="#" class=" waves-effect waves-light">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" /><input class="ponteiro" name="hosted_button_id" type="hidden" value="B5GDCSVXH6JV4" /><input class="ponteiro" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image" /><img src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="patch" class="section" style="padding: 50px 0 50px 0">
    <div class="container">
      <div class="row">
        <h5 class="center">Notas de Atualizações</h5>
            <blockquote>
              <h5>Tinn-R versão 5.1.2.0</h5>
              <h6 class="light italic">16 de outubro, 2016 por JCFaria</h6>
            </blockquote>
            Bug(s) fixed:<br>
            - Two major bugs introduced in the pre-release version 4.2.6.0 have been fixed.<br>
            - A bug related to Help, Example and Open example when all files were closed was fixed.<br>
            - A bug related to Rterm interface (IO) and the package debug was fixed. Thanks to Ivan B. Allaman for pointing it out.<br>
            - A bug related to the custom color storage was fixed.<br>
            - A bug related to the Options/Syntax (highlighter)/Default (to new files) was fixed.<br>
            - A bug related to the Options/Syntax (highlighter) was fixed. Thanks to Manuela Huso for pointing it out.<br>
            - Some issues about the completion followed by F3 to find the next occurrence of | were corrected.<br>
            - Issues about the installation of TinnRcom package (and its dependences) were corrected.<br>
            <p>A lot of PRE-RELEASE versions of the project have been released, not restrict to testers. Thanks for testing and suggestions.</p>
            <p>The installation of TinnRcom package (and its dependences) was improved. From now, the sources (.tar.gz) and the binaries (.zip) of the packages formatR, svMisc, svSocket and TinnRcom will be released within the setup of Tinn-R. After the installation, it will be placed at packages folder. So all will be installed from the local .zip.</p>
            <p>The package TinnRcom was upgraded to the version 1.0.20.</p>
            <p>The menu options has a new option: R echo (on/off). This grants the user the choice to acho (or not) some options of send file, selection, clipboard, block marked, contiguous lines a line to end of page. A related button was add to R task bar. This made simpler and user friendly these options. The default shortcut to toggle this option is ALT + E</p>
            <p>The procedure to open a remote file from an URL was improved and also covers https protocol.</p>
            <p>If the user choice in Options/Application/R/Patch (R) is No to Use latest installed version (always) option, at startup, Tinn-R will search in all letters of the system drives for the fully informed path of R. It is very useful in the portable flavours due to letters changes in different computers.
            <p>The visibility of all Page Control and Tab Sheets caption were improved.</p>
            <p>R will always start with two options:<br>
            - options(pkgType=’binary’)<br>
            - options(install.packages.check.source=’no’)</p>
      </div>
    </div>
  </div>

  <?php
    include('footer.php');
  ?>