<?php
  $title = "Download Free | Tinn-R";
  $description = "Download Tinn-R for free. Available for Windows and PortableApps.";
  include('header.php');
?>
<?php
  $url_WinVersion="http://nbcgib.uesc.br/lec/update/new_version.txt";
  $url_PortVersio="http://nbcgib.uesc.br/lec/update/new_version_portable.txt";
  $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

  //Utilizando php CURL para acessar URL's.
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_VERBOSE, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERAGENT, $agent);
  curl_setopt($ch, CURLOPT_URL,$url_WinVersion);
  $update_link=curl_exec($ch);
  $dados_download = explode("\n", $update_link); 
  //dados_download[0] = Link de download windows
  //dados_download[1] = Link de download portavel 
  //dados_download[2] = Data de release
  preg_match('/\d{1}\.\d{2}\.\d{2}\.\d{2}(?=_setup.exe)/', $dados_download[0], $setup_version);
  preg_match('/\d{1}\.\d{2}\.\d{2}\.\d{2}(?=_portable.zip)/', $dados_download[1], $portable_version);

?>

  <div class="section">
    <div class="container" style="padding: 20px 0px 10px 0px;">
      <div class="row">
        <h4 class="center grey-text text-darken-2">Download Tinn-R</h4>
        <h6 class="center grey-text text-darken-2">Available for Windows <i class="fa fa-windows"></i></h6>
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
              <h6 class="grey-text text-darken-1"><?php echo $setup_version[0] ?></h6>
              <p>Executable in desktop version for Windows operating system.<br>&nbsp</p>
            </div>
            <div class="card-action center">
              <a class="waves-effect waves-light btn orange lighten-1"  href="<?php echo $dados_download[0];?>"><i class="material-icons left">file_download</i>Download</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Portable version</span>
              <h6 class="grey-text text-darken-1"><?php echo $portable_version[0] ?></h6>
              <p>Portable version that works from any synchronized cloud folder, from an external or internal drive.</p>
            </div>
            <div class="card-action center">
              <a class="waves-effect waves-light btn orange lighten-1" href="<?php echo $dados_download[1];?>"><i class="material-icons left">file_download</i>Download</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col s12 m12 center"> 
          <a href="#patch">See the patch notes</a>
        </div>
      </div>
      <br>
    </div>
  </div>

  <div class="section grey lighten-3" style="padding: 80px 0px 80px 0px; background-image: url(../assets/img/lines.jpg); background-size: cover">
    <div class="container">
      <div class="row center">
        <div class="col m2 s4 offset-m1 hide-on-small-only">
          <img class="responsive-img"  src="../assets/img/opensource.png" alt="Open Source logo">
        </div>
        <div class="col m8 s12">
          <div class="row">
            <h5>Open Source and Freeware</h5>
            <p class="spaced">Download our source code at any time, become a developer too!</p>
            <a href="https://github.com/jcfaria/Tinn-R" id="download-button" class="btn waves-effect waves-light orange lighten-1 espaco" target="_blank">Source Code (GitHub <i class="fa fa-github"></i>)</a>
            <a href="donation" class="btn waves-effect waves-light orange darken-3 espaco">Make a donation  <i class="fa fa-gift fa-2x"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="patch" class="section" style="padding: 50px 0 50px 0">
    <div class="container">
      <div class="row">
        <h5 class="center">Patch Notes</h5>
        <?php
          $url_notes="http://nbcgib.uesc.br/lec/update/patch_notes.html";
          $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

          //Utilizando php CURL para acessar URL's.
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_VERBOSE, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_USERAGENT, $agent);
          curl_setopt($ch, CURLOPT_URL,$url_notes);

          $downloaded_html=curl_exec($ch);

          echo utf8_encode($downloaded_html);
        ?>
      </div>
    </div>
  </div>

  <?php
    include('footer.php');
  ?>