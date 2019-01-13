<?php
  include('header.php');
?>

  <div class="section">
    <div class="container" style="padding: 20px 0px 0px 0px;">
      <div class="row " style="margin-bottom: 0px">
        <h4 class="center grey-text text-darken-2">Um pouco de História</h4>
        <h5 class="center grey-text text-darken-2">O Tinn-R</h5>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col m8 offset-m2 card">
        <span class="">
          <p>O projeto teve início em meados/2003, seis meses após o atual coordenador do projeto (ACP) ter conhecido o ambiente <a href="http://www.r-project.org/">R</a>. Em agosto/2003 ele havia decidido que adotaria o <a href="http://www.r-project.org/">R</a> como principal ferramenta no ensino da estatística (sua principal atividade) e também em análises de dados (segunda principal atividade).</p>
          <p>Os objetivos iniciais do projeto em relação ao <a href="http://www.r-project.org/">R</a> foram três:</p>
          <ul>
          <li>Desenvolver um Editor/GUI simples e flexível sob o sistema operacional Windows</li>
          <li>Prover facilidades de uso para os alunos nos cursos de graduação e pós-graduação em estatística</li>
          <li>Facilitar as tarefas do ACP relativas ao ensino e análise de dados no ambiente <a href="http://www.r-project.org/">R</a></li>
          </ul>
          <p>Após o ACP ter testado a quase totalidade das GUIs então disponíveis:</p>
          <ul>
          <li><a href="http://www.sciviews.org/SciViews-R/">SciViews</a></li>
          <li><a href="http://socserv.socsci.mcmaster.ca/jfox/Misc/Rcmdr/index.html">Rcmdr</a></li>
          <li><a href="http://rforge.net/JGR/">JGR</a></li>
          <li>(entre outras)</li>
          </ul>
          <p>assim como os editores mais conhecidos que ofereciam recursos para interagir com o <a href="http://www.r-project.org/">R</a>:</p>
          <ul>
          <li><a href="http://www.xemacs.org/">Emacs</a></li>
          <li><a href="http://www.vim.org/">Vim</a></li>
          <li><a href="http://www.textpad.com/">TextPad</a></li>
          <li><a href="http://sourceforge.net/projects/syn/">Syn</a></li>
          <li><a href="http://www.crimsoneditor.com/">Crimson editor</a></li>
          <li>(entre outros)</li>
          </ul>
          <p>ele percebeu que não se adaptava bem às GUIs nem aos editores testados. Mais ainda, preocupava-o as dificuldades relacionadas ao ensino (instalação, configuração e uso) nos laboratórios de estatística computacional.</p>
          <p>Entre esses, o <a href="http://www.gnu.org/software/emacs/">Emacs</a> + <a href="http://ess.r-project.org/">ESS</a> era o mais conhecido, recomendado e usado por usuários experientes. Entretanto, de configuração e uso difícil para o usuário iniciante (público principal no ensino da estatística computacional relativa ao <a href="http://www.r-project.org/">R</a>) ou ocasional. Adicionalmente, a interface não era agradável aos usuários acostumados com a rica interface gráfica proporcionada pelo Windows. Pode-se observar que alguns projetos eram ainda incipientes, enquanto outros estavam com problemas de continuidade.</p>
          <p>O ACP imaginou que poderia personalizar um editor acrescentando-lhe as funcionalidades que satisfizessem às necessidades de uma GUI. Como programava a muitos anos em <a href="http://en.wikipedia.org/wiki/Object_Pascal">Object Pascal</a>, seria interessante partir de um editor de código aberto (<em>open source</em>), escrito nesta linguagem, e adaptá-lo às necessidades.</p>
          <p>Após buscas na internet e testes preliminares, foram selecionados seis editores desenvolvidos sob a <a href="http://pt.wikipedia.org/wiki/Ambiente_de_desenvolvimento_integrado">IDE</a>&nbsp;<a href="http://pt.wikipedia.org/wiki/Embarcadero_Delphi">Delphi</a> da então <a href="http://www.borland.com/br/">Borland</a> (atualmente <a href="http://www.embarcadero.com/">Embarcadero</a>).</p>
          <p>A segunda etapa consistiu de testes de performance e estabilidade. Finalmente dois projetos foram selecionados:</p>
          <ul>
          <li><a href="http://tinn.solarvoid.com/">Tinn</a>, em língua Inglesa, descontinuado em 2005</li>
          <li>Notes, em língua Portuguesa, descontinuado também em 2005</li>
          </ul>
          <p>Ambos possuíam as características básicas necessárias de um editor. Entre eles, o <a href="http://tinn.solarvoid.com/"><strong>Tinn</strong></a> (<em><strong>T</strong>inn <strong>I</strong>s <strong>N</strong>ot <strong>N</strong>otepad</em>) apresentou maior simplicidade estrutural, melhor performance e maior estabilidade, o que motivou sua seleção final.</p>
          <p>Embora os recursos básicos de um editor genérico e simples já tivessem sido implementados pelos desenvolvedores, havia muito ainda o que se fazer: tanto em relação ao editor quanto a futura GUI. O pequeno grupo de desenvolvedores do <a href="http://tinn.solarvoid.com/">Tinn</a> foi comunicado (embora isto não seja uma exigência dos softwares sob a Licença Pública Geral - <a href="http://pt.wikipedia.org/wiki/GNU_General_Public_License">GPL</a>) da intenção de implementar novos recursos. Trabalhou-se juntos no código fonte do editor <a href="http://tinn.solarvoid.com/">Tinn</a> por cerca de cinco a seis meses até que percebeu-se, dado às novas necessidades, que não seria possível mantê-lo genérico, segundo a concepção original do projeto <a href="http://tinn.solarvoid.com/">Tinn</a>. A partir de então (novembro de 2003) teve início um novo projeto: Tinn-R.</p>
          <p>Em dezembro/2003 as características básicas que permitiam a comunicação com o ambiente <a href="http://www.r-project.org/">R</a> haviam sido implementadas e o programa já era usado pelo ACP para as análises. Seria também usado nas aulas de estatística de um curso de mestrado na <a href="http://www.uesc.br/">UESC</a>/<a href="http://www.uesc.br/cursos/pos_graduacao/mestrado/ppgpv/">PPGPV</a> (ainda em preparação e com início das aulas marcado para março/2004).</p>
          <p>Em Janeiro/2004 foi enviada uma cópia de apresentação e avaliação para o então coordenador dos projetos GUI da <a href="http://cran.r-project.org/">CRAN</a>&nbsp;(<em>The Comprehensive R Archive Network</em>), Dr. <a href="http://www.sciviews.org/_rgui/">Philippe Grosjean</a>. O projeto recebeu muitos elogios e uma série de sugestões, tendo sido essas (em grande parte) implementadas em curto prazo. Outras (devido a complexidade) somente a longo prazo.</p>
          <p>Numa etapa posterior, decidiu-se pela sua disponibilização para os usuários <a href="http://www.r-project.org/">R</a> na home page <a href="http://www.sciviews.org/">SciViews-R</a>, mantida por Philippe. O nome do projeto (Tinn-R) foi uma das sugestões do Philippe. Dessa forma, a primeira versão disponibilizada foi a <em>0.0.8.8 r1.04 (Jan/2004)</em>. Os autores eram então José Cláudio Faria e Marcos de Groot. Marcos era um dos membros remanescentes da equipe original do projeto Tinn, Philippe era então colaborador. Esta foi a primeira versão divulgada ao púbico do projeto.</p>
          <p>Posteriormente, devido à colaboração efetiva na definição das características do projeto, ao desenvolvimento de funções no <a href="http://www.r-project.org/">R</a> que permitiram uma melhor integração entre os dois programas (<a href="http://www.r-project.org/">R</a> e Tinn-R), Philippe foi convidado para ser co-autor do projeto. Marcos de Groot, um excelente programador em Object Pascal, como não tinha afinidades com estatística, foi se afastando do projeto ao longo do tempo, ficando como colaborador esporádico e desde 2006 não mais contribuíu.</p>
          <p>Registrado sob a Licença Pública Geral <a href="http://pt.wikipedia.org/wiki/GNU_General_Public_License">GPL</a>, o projeto ganhou muitos adeptos e incontáveis sugestões passaram a ser enviadas pelos novos usuários. O sucesso do projeto é atribuída à experiência de Philippe no desenvolvimento de GUIs para o <a href="http://www.r-project.org/">R</a>, às suas sugestões (sempre solicitando mais recursos do que o ACP estava disposto implementar), assim como a dos usuários (idem), que determinaram efetivamente a direção de seu desenvolvimento.</p>
          <p>O projeto começou então a ser usado como editor de Editor/GUI simples, porém eficiente, nas instituições de ensino e pesquisa relacionadas à estatística e ao <a href="http://www.r-project.org/">R</a>. Ao longo dos anos buscou-se, dentro do tempo disponível para esta atividade, atender da melhor forma possível a demanda e as sugestões dos usuários, o que talvez seja seu grande diferencial: <strong>um programa feito por usuários para usuários</strong>.</p>
          <p class="western">No final de 2006, juntou-se ao projeto <a href="/lec/professores/enio/pag-pessoal">Enio G. Jelihovschi</a>, como responsável pela documentação na língua Inglesa do projeto.</p>
          <p>Em 2008 o pós-doutoramento do ACP (<a href="http://www.esalq.usp.br/">ESALQ/USP</a>, sob a orientação da prof. <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&amp;id=K4787758H7">Clarice G. B. Demétrio</a>) como bolsista do <a href="http://www.cnpq.br/">CNPq</a> teve como título: <em>TINN-R - GUI/EDITOR PARA O AMBIENTE COMPUTACIONAL E ESTATÍSTICO DE CÓDIGO ABERTO R</em>, teve dois objetivos principais:</p>
          <ul>
          <li>Aprimoramento e consolidação do programa sob o sistema operacional Windows</li>
          <li>Uso independente do sistema operacional (multiplataforma)</li>
          </ul>
          <p>O primeiro objetivo foi cumprido na íntegra. Quanto ao segundo, estudos das principais alternativas (uso da IDE multiplataforma <a href="http://www.lazarus.freepascal.org/index.php">Lazarus</a> e Migração para a plataforma .Net sob <a href="http://www.mono-project.com/Main_Page">MONO</a>) foram desenvolvidos. Após contatos com as equipes desenvolvedoras destes ambientes e ferramentas, assim como a realização de testes preliminares, concluiu-se que, em ambos os casos, seria uma tarefa exaustiva e de resultados finais duvidosos.</p>
          <p>A <a href="http://www.embarcadero.com/">Embarcadero</a>, após a aquisição da linha de compiladores da <a href="http://www.borland.com/br/">Borland</a>, tem feito esforços sérios no sentido de permitir a compilação do código em Object Pascal/Delphi para outras plataformas, além do Windows. Dessa forma vislumbra-se, a médio e longo prazo, a possibilidade de portabilidade do projeto para <a href="http://pt.wikipedia.org/wiki/Linux">Linux</a> e <a href="http://www.apple.com/br/mac/">Mac</a>.</p>
          <div class="row center">
          	<a href="doe.php" class="btn waves-effect waves-light orange">Faça uma doação  <i class="fa fa-gift fa-2x"></i></a>
      	  </div>
        </span>
        </div>
      </div>
    </div>
  </div>

  <?php
    include('footer.php');
  ?>