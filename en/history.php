<?php
include('header.php');
?>

<div class="section">
  <div class="container" style="padding: 20px 0px 0px 0px;">
    <div class="row" style="margin-bottom: 0px">
      <h4 class="center grey-text text-darken-2">A little history</h4>
      <h5 class="center grey-text text-darken-2">The Tinn-R</h5>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col m8 offset-m2 card">
        <span class="">
          <p style="text-align: justify;">The project began in mid/2003, six months after the current project coordinator (CPC) start working with the environment <a href="http://www.r-project.org/">R</a>. In August/2003 he had decided to adopt <a href="http://www.r-project.org/">R</a> as the main tool in the teaching of statistics (his main activity) and also statistical data analysis (second main activity).</p>
          <p style="text-align: justify;">The initial objectives of the project with respect to <a href="http://www.r-project.org/">R</a> were three:</p>
          <ul style="text-align: justify;">
            <li>Developing an Editor/GUI simple and flexible under the Windows operational system</li>
            <li>Providing facilities for students in undergraduate and graduate statistics courses</li>
            <li>Facilitate the workof the CPC regarding data analysis using <a href="http://www.r-project.org/">R</a></li>
          </ul>
          <p style="text-align: justify;">After the CPC have tested almost all GUIs then available:</p>
          <ul style="text-align: justify;">
            <li><a href="http://www.sciviews.org/SciViews-R/">SciViews</a></li>
            <li><a href="http://socserv.socsci.mcmaster.ca/jfox/Misc/Rcmdr/index.html">Rcmdr</a></li>
            <li><a href="http://rforge.net/JGR/">JGR</a></li>
            <li>(among others)</li>
          </ul>
          <p style="text-align: justify;">as well as other popular editors offering resources to interact with <a href="http://www.r-project.org/">R</a>:</p>
          <ul style="text-align: justify;">
            <li><a href="http://www.xemacs.org/">Emacs</a></li>
            <li><a href="http://www.vim.org/">Vim</a></li>
            <li><a href="http://www.textpad.com/">TextPad</a></li>
            <li><a href="http://sourceforge.net/projects/syn/">Syn</a></li>
            <li><a href="http://www.crimsoneditor.com/">Crimson editor</a></li>
            <li>(among others)</li>
          </ul>
          <p style="text-align: justify;">he realized that he did not adapt well to neither the GUIs nor the editors tested. Furthermore, he worried about the difficulties related to teaching (installation, configuration and usage) in the laboratories of statistical computing.</p>
          <p style="text-align: justify;">Among these, the <a href="http://www.gnu.org/software/emacs/">Emacs</a> + <a href="http://ess.r-project.org/">ESS</a> was the best known, recommended and used by experienced users, however, with difficult configuration and usage for the novice user (main public teaching on the <a href="http://www.r-project.org/">R</a> statistical computing) or casual. Additionally, the interface was not pleasant to users accustomed to the rich Windows graphical interfaces. Moreover, some projects were still fledgling, while others had problems of continuity.</p>
          <p style="text-align: justify;">The CPC imagined that an editor could be customized by adding features that the GUI needs. Since he had already been an old programmer in <a href="http://en.wikipedia.org/wiki/Object_Pascal">Object Pascal</a>, it would be interesting to start from an open source editor written in this language, and adapt it to his needs.</p>
          <p style="text-align: justify;">After searching the internet and preliminary tests, six editors developed under the Delphi IDE then <a href="http://www.borland.com/">Borland</a> (now <a href="http://www.embarcadero.com/">Embarcadero</a>) were selected.<br /><br />The second stage consisted of testing performance and stability. Finally, two projects were selected:</p>
          <ul style="text-align: justify;">
            <li><a href="http://tinn.solarvoid.com/">Tinn</a>, in English, discontinued in 2005</li>
            <li>Notes, in Portuguese, also discontinued in 2005</li>
          </ul>
          <p style="text-align: justify;">Both had the basic features needed. Among them, the <strong>Tinn</strong> (<em><strong>T</strong>inn <strong>I</strong>s <strong>N</strong>ot <strong>N</strong>otepad</em>) showed greater structural simplicity, better performance and greater stability, which led to his final selection.</p>
          <p style="text-align: justify;">Although the basic features of a generic and simple editor had already been implemented by the developers, there was still much to be done in relation to the editor and future GUI. The small group of <a href="http://tinn.solarvoid.com/">Tinn</a> developers was reported (although this is not a requirement of the software under the General Public License - <a href="http://en.wikipedia.org/wiki/GNU_General_Public_License">GPL</a>) of the CPC´s intention to have new features implemented. They worked together in the source code of the editor <a href="http://tinn.solarvoid.com/">Tinn</a> for about five to six months until realizing, given the new requirements, that would not be possible to keep it generic, according to the original design of the project <a href="http://tinn.solarvoid.com/">Tinn</a>. Then, in November/2003 a new project started: Tinn-R.</p>
          <p style="text-align: justify;">In December/2003 the basic features allowing communication with the <a href="http://www.r-project.org/">R</a> environment had already been implemented and the program used by the CPC for his analyzes. It would also be used in the classroom of a statistics graduate studies at the <a href="http://www.uesc.br/">UESC</a>/<a href="http://www.uesc.br/cursos/pos_graduacao/mestrado/ppgpv/">PPGPV</a> (still in preparation, and scheduled for March/2004).</p>
          <p style="text-align: justify;">In January/2004 a copy of the software was forwarded to the coordinator for GUI projects of <a href="http://cran.r-project.org/">CRAN</a><em style="text-align: justify;">&nbsp;(</em><em>The Comprehensive R Archive Network)</em>, Dr. <a href="http://www.sciviews.org/_rgui/">Philippe Grosjean</a>. The project received high praise and a number of suggestions, most were (largely) implemented in the short term. Others, due to complexity, took the long term.</p>
          <p style="text-align: justify;">At a later stage, Tinn-R was made available to <a href="http://www.r-project.org/">R</a> users in <a href="http://www.sciviews.org/">SciViews-R</a> home page, maintained by Philippe. The project name (Tinn-R) was one of the suggestions made by Philippe. The version <em>0.0.8.8 R1.04 (Jan/2004)</em> was the first one to be released. The authors were then José Cláudio Faria and Mark de Groot. Mark was one of the remaining members of the original <a href="http://tinn.solarvoid.com/" target="_parent">Tinn</a> team project, Philippe was then collaborator. This was the first published version of the project.</p>
          <p style="text-align: justify;">Subsequently, given the effective collaboration in defining the characteristics of the project, and the development of the <a href="http://www.r-project.org/">R</a> functions that allow better integration between the two programs (Tinn-R and <a href="http://www.r-project.org/">R</a>), Philippe was invited to be co-author of the project. Mark de Groot, an excellent programmer in Object Pascal, since having no affinities with statistics, began to move away from the project, becoming a sporadic contributor and since 2006 no longer contributed to the project.</p>
          <p style="text-align: justify;">Registered under the General Public License <a href="http://en.wikipedia.org/wiki/GNU_General_Public_License">GPL</a>, the project gained many supporters and countless suggestions began to be sent by new users. The project's success is attributed to the experience of Philippe in GUI development for <a href="http://www.r-project.org/">R</a>, to his suggestions (always requesting more resources than the CPC was willing to implement), as well as the users' (the same), which effectively determined the direction of its development.</p>
          <p style="text-align: justify;">The project began to be used as editor of Editor/GUI, simple, yet efficient, in educational and research institutions related to statistics and <a href="http://www.r-project.org/">R</a>. Over the years we sought, within the time available for this activity, answer, in the best possible way, the demand and feedback from users, which may be your great advantage:<strong> a program designed by users for users</strong>.<br /><br />In late 2006, <a href="professores/enio/pag-pessoal">Enio G. Jelihovschi</a> joined the project, becoming responsible for its documentation.</p>
          <p style="text-align: justify;">In 2008, the post-doctoral of CPC<a href="http://www.esalq.usp.br/"> (ESALQ/USP</a>, under the supervision of the prof. <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&amp;id=K4787758H7">Clarice G. B. Demétrio</a>) with a scholarship from <a href="http://www.cnpq.br/">CNPq</a> had the title: TINN-R - GUI/EDITOR FOR R OPEN SOURCE ENVIRONMENT FOR STATISTICAL COMPUTING, had two main objectives:</p>
          <ul style="text-align: justify;">
            <li>Improvement and consolidation of program under the Windows operational system</li>
            <li>Use, independent of the operational system (multiplatform)</li>
          </ul>
          <p style="text-align: justify;">The first objective was met in full. As for the second, studies of the main alternatives (using the multiplatform <a href="http://www.lazarus.freepascal.org/index.php">Lazarus</a> and migration to the platform .Net under <a href="http://www.mono-project.com/Main_Page">MONO</a>) were developed. After contacting teams of developers of those tools and environments, and also preliminary testing, we finally reach the conclusion that, in both cases, it would be an overwhelming task and the final results unreliable.</p>
          <p style="text-align: justify;">The <a href="http://www.embarcadero.com/">Embarcadero</a>, after the acquisition of the compilers from <a href="http://www.borland.com/">Borland</a>, has made serious efforts to enable the compilation of code in Object Pascal/Delphi available in other platforms, beyond Windows. Thus, it is envisaged in the medium and long term, the possibility of porting the Tinn-R project for <a href="http://en.wikipedia.org/wiki/Linux">Linux</a> and <a href="http://www.apple.com/">Mac</a>.</p>
          <div class="row center">
            <a href="donate.php" class="btn waves-effect waves-light orange">Make a Donation  <i class="fa fa-gift fa-2x"></i></a>
          </div>
        </span>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>