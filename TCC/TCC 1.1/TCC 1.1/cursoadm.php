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
              <a href="teladelogin.html"><button class="btn btn-outline-success text-white" type="button">Login</button></a>
            </form>
          </div>
        </div>
      </nav>



<div class="text-center"><section id="topo">
    <br>
    <br><img src="img/ETEClogo.png" alt="Logo da ETEC"></section>
</div>

    <h1 class="text-center">
ETEC - Escola Técnica do Estado de São Paulo
    </h1>

























    




    <footer class="bg-primary text-white">
        <div class="container">
          <div class="row py-4">
            <div class="col-12 col-md text-center mx-auto">
              
              <h3>ETEC</h3>
              <h4>Cursos Técnicos</h4> 
              <p class="text-white-50 text-small">
                Mais de 150 tipos de cursos técnicos gratuitos<br> 
                Presente em 156 municípios paulistas, como o total de 212 Etecs no Estado de São Paulo. <br>
                208 mil estudantes <br>    
                Desde 1911<br>
 
              </p>
            </div>
            <div class="col-12 col-md text-center mx-auto">
              <h3> Links</h3>
              <ul>
                <a href="sobre.html" class="text-white">Quem somos nós</a><br>
              </ul>
            </div>
            <div class="col-12 col-md text-center mx-auto">
              <h3> <section id="sociais"> </h3>
              <ul>
<img src="img/centropaula.png" width="150" alt="Logo da ETEC">
                <br>
                <div class="copyright text-center text-lg-left">
                  &copy; Copyright. All rights reserved.
              </ul></section>
            </div>
          </div>
        </div>
      </footer>




    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
  ></script>


</body>
</html>