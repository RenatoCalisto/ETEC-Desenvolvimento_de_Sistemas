<?php

require_once("header.php");

?>

<body>

     <nav class="navbar fixed-top navbar-expand-lg bg-primary " data-bs-theme="dark">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            
            <a class="nav-link active text-white " aria-current="page"  href="index.php">Home</a>
            
            <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cursos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cursoadm.php">Administração</a></li>
                  <li><a class="dropdown-item" href="cursocom.php">Comércio</a></li>
                  <li><a class="dropdown-item" href="cursodes.php">Desenvolvimento de Sistemas</a></li>
                  <li><a class="dropdown-item" href="cursoguia.php">Guia de Turismo</a></li>
                  <li><a class="dropdown-item" href="cursosec.php">Secretariado</a></li>
                  <li><a class="dropdown-item" href="cursotran.php">Transações Imobiliárias</a></li>
                </ul>
              </li>

            </ul>


            <form class="d-flex ms-auto" role="search">
                <a href="home.php"><button class="btn btn-outline-success text-white" type="button">Login</button></a>
            </form>
          </div>
        </div>
      </nav>





      <div class="text-center"><section id="topo">
    <br>
    <br>
    <br>
    <br><img src="img/Atomologo.png" alt="Logo da Escola"></section>
</div>

    <h1 class="text-center">
Atomo - Escola Técnica EaD
<br>
<br>
    </h1>




<p class="text-center">As Escolas Técnicas Atomo são instituições de ensinos técnico, pertencentes ao Grupo de Educação Ciencia e Progresso (GECIP).</p>

<h2 class="text-center">História</h2>
<p class="text-center">Na década de 1960 houve reuniões entre o Conselho Educacional para a criação de instituições que atendessem à necessidade do acompanhamento profissional e expansão industrial do Brasil. A partir de 1967, quando a empresa Atomo assumiu a presidencia do grupo, que antes era apenas uma unidade e um sonhoa ser criado, foi que a ideia de se criarem escolas técnicas foi se tornando cada vez mais concreta. Em 6 de outubro de 1969, as Escolas Técnicas Atomo iniciou suas atividades. Atualmente são 198 escolas, que ministram cursos técnicos em 150 municípios do país. A Escola Tecnica Atomo está entre as melhores escolas particulares gratuitas do Brasil.</p>

<h2 class="text-center">Unidades</h2>

<p class="text-center">As escolas Atomo estão distribuídas em 156 municípios brasileiros, como o total de 212 Atomos no país.</p>

<h2 class="text-center">Processo Seletivo</h2>

<p class="text-center">Para ingressar numa escola Atomo, o candidato deve apenas fazer um breve cadastro.</p>

<h2 class="text-center">Etecs no Enem</h2>

<p class="text-center">Tradicionalmente, os alunos da Atomo têm desempenho destacado no Exame Nacional do Ensino Médio (Enem). Resultados divulgados em 2011 pelo Ministério da Educação, referentes à última prova, realizada em 2009, apontam que, entre as 50 escolas públicas estaduais do Brasil com melhor pontuação, 34 são da Atomo. A Atomo está entre as melhores escolas particulares gratuitas brasileira. No ranking nacional, à frente de muitas escolas particulares tradicionais.</p>





      <div class="container">
        <div class="text-center">
                                <h1 class="title">Conheça nossos Cursos</h1>
        </div>
    </div>



      <section id="features" class="section feature">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="single-feature text-center text-lg-left ">
                                <a href="cursoadm.php"><img src="img/indexcursoadm.jpg" alt="foto de um administrador assinando um papel" class="img-fluid feature-img" ></a>
                                <div class="space-md"></div>
                                <h3 class="title">Curso de Administração</h3>
                                <div class="space-sm"></div>
                                <p class="lead">
                                    Organizado em três módulos, o curso oferece a oportunidade de certificação a cada etapa estudada e conta com material didático composto por roteiros de estudo, livros em formato pdf, videoaulas e objetos interativos de estudo.
                                        <br>
                                    O <strong>Técnico em Administração</strong> é o profissional que executa operações administrativas relativas a protocolos e arquivos, confecção e expedição de documentos e controle de estoques. Aplica conceitos e modelos de gestão em funções administrativas. Opera sistemas de informações gerenciais de pessoal e de materiais.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-feature text-center text-lg-left">
                                <a href="cursocom.php"><img src="img/indexcursocomercio.jpg" alt="foto de um comerciante vendendo" class="img-fluid feature-img"></a>
                                <div class="space-md"></div>
                                <h3 class="title">Curso de Comércio</h3>
                                <div class="space-sm"></div>
                                <p class="lead">             
                                    Organizado em três módulos, o curso oferece a oportunidade de certificação a cada etapa estudada e conta com material didático composto por roteiros de estudo, livros em formato pdf, videoaulas e objetos interativos de estudo.
                                        <br>
                                    O <strong>Técnico em Comércio</strong> é o profissional que aplica métodos de comercialização de bens e serviços. Efetua controle quantitativo e qualitativo de produtos. Coordena a armazenagem no estabelecimento comercial. Elabora planilha de custos. Verifica a demanda e comunica previsões aos fornecedores. Operacionaliza planos de marketing e comunicação, logística, recursos humanos e comercialização.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-feature text-center text-lg-left">
                                <a href="cursodes.php"><img src="img/indexcursodesenvolvedor.jpg" alt="foto de um programador de computadores" class="img-fluid feature-img"></a>
                                <div class="space-md"></div>
                                <h3 class="title">Curso de Desenvolvimento de Sistemas</h3>
                                <div class="space-sm"></div>
                                <p class="lead">
                                    Organizado em três módulos, o curso oferece a oportunidade de certificação a cada etapa estudada e conta com material didático composto por roteiros de estudo, livros em formato pdf, videoaulas, objetos interativos de estudo e aulas práticas Online.
                                        <br>
                                    O <strong>Técnico em Desenvolvimento de Sistemas</strong> é o profissional que analisa e projeta sistemas. Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento e linguagens de programação específica. Modela, implementa e mantém bancos de dados.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <br>

    <section id="features" class="section feature">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="single-feature text-center text-lg-left ">
                                <a href="cursoguia.php"><img src="img/indexcursoguia.jpg" alt="foto de uma guia de turismo em uma canoa no meio de um rio" class="img-fluid feature-img" ></a>
                                <div class="space-md"></div>
                                <h3 class="title">Curso de Guia de Turismo</h3>
                                <div class="space-sm"></div>
                                <p class="lead">
                                    Organizado em dois módulos, o curso oferece a oportunidade de certificação a cada etapa estudada e conta com material didático composto por roteiros de estudo, livros em formato pdf,  videoaulas e objetos interativos de estudo.
                                        <br>
                                    O <strong>Técnico em Guia de Turismo</strong> é o profissional que conduz e assiste pessoas ou grupos em traslados, passeios, visitas e viagens. Informa os visitantes sobre aspectos socioculturais, históricos, ambientais e geográficos. Traduz o patrimônio material e imaterial de uma região para visitantes. Estrutura e apresenta roteiros e itinerários turísticos de acordo com interesses, expectativas ou necessidades específicas.                                  
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-feature text-center text-lg-left">
                                <a href="cursosec.php"><img src="img/indexcursosecretariado.jpg" alt="foto de uma secretária trabalhando em frente a um computador" class="img-fluid feature-img" ></a>
                                
                                <div class="space-md"></div>
                                <h3 class="title">Curso de Secretariado </h3>
                                <div class="space-sm"></div>
                                <p class="lead">
                                    Organizado em três módulos, o curso oferece a oportunidade de certificação a cada etapa estudada e conta com material didático composto por roteiros de estudo, livros em formato pdf, videoaulas e objetos interativos de estudo.
                                        <br>
                                    O <strong>Técnico em Secretariado</strong> é o profissional que organiza a rotina diária e mensal da chefia ou direção para o cumprimento dos compromissos agendados. Estabelece os canais de comunicação da chefia ou direção com interlocutores, internos e externos, em língua nacional e estrangeira. Organiza tarefas relacionadas com o expediente geral do secretariado da chefia ou direção. Controla e arquiva documentos. Preenche e confere documentação de apoio à gestão organizacional. Utiliza aplicativos e a internet na elaboração, organização e pesquisa de informação.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-feature text-center text-lg-left">
                                <a href="cursotran.php"><img src="img/indextransimobiliaria.jpg" alt="foto de chaves em frente a uma casa" class="img-fluid feature-img"></a>
                                <div class="space-md"></div>
                                <h3 class="title">Curso de Transações Imobiliárias</h3>
                                <div class="space-sm"></div>
                                <p class="lead">
                                    Organizado em dois módulos, o curso oferece a oportunidade de certificação ao final do segundo módulo e conta com o material didático composto por roteiros de estudo, libros em formato pdf, videoaulas e objetos interativos de estudo.
                                        <br>
                                    O <strong>Técnico em Transações Imobiliárias</strong> é o profissional que está habilitado para intermediar a compra, a venda, a locação e a permuta de imóveis. Atua na administração de bens imóveis, solicita e orienta quanto à documentação necessária para cadastramento, transferência, inscrição e registro junto aos órgãos competentes. Apresenta os imóveis aos clientes potenciais e orienta investimentos no mercado imobiliário. Realiza pesquisa de mercado, bem como a captação de imóveis, elaborando estratégias de demonstração e comercialização. Atua como avaliador de imóveis urbanos e rurais. Emite parecer técnico de avaliação mercadológica e comercial sobre o bem a ser comercializado. Interpreta projetos arquitetônicos e mapas. Acompanha a movimentação do mercado para antever tendências que afetam o empreendimento. Presta assessoria aos clientes após a transação imobiliária.
                                    <div class="space-sm"></div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>        
        <div class="space-md"></div>
        </div>
    </section>
    </div>
    </div>
    </div>
</section>







      <section id="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.636874822103!2d-46.44011051261395!3d-24.008596722712973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c2b9117f9e7%3A0xde28918ce195e82e!2sETEC%20Praia%20Grande!5e0!3m2!1spt-BR!2sbr!4v1681789026300!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>


<?php

require_once("footer.php");


?>

 <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
></script>

</body>
</html>

