<?php
  //conexao a base de dados
  #configurações da base de dados
  $servidor = 'localhost';
  $dbname = 'portfolio_db';
  $usuario = 'root';
  $usenha = '';

  #conectando a base de dados
  try {
      $con = new PDO ("mysql:host=$servidor;dbname=$dbname", $usuario, $usenha);
  } catch (PDOException $pe) {
      die("nao foi possivel se conectar a base de dados $dbname : " . $pe->getMessage());
  }

  if(isset($_POST['submit'])){
    $nomeRem = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $emailRem = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $insert = "INSERT INTO `contactar`(`nome`, `email`, `assunto`, `mensagem`) VALUES ('$nomeRem','$emailRem','$assunto','$mensagem')";
    $mov = $con->prepare($insert);
    $mov->execute();
    $mov->setFetchMode(PDO::FETCH_ASSOC);
  }
?>

<?php
  //pegando dados da base de dados
  $query = ("SELECT * FROM `pessoa`");
  $resgisto = $con->query($query, PDO::FETCH_ASSOC);
  $res = $resgisto->fetch();

  $id = $res['id'];
  $nome = $res['nome'];
  $profissao = $res['profissao'];
  $perfil = $res['img'];
  $resumo = $res['resumo'];

  $query1 = ("SELECT * FROM `contas` WHERE `id_pessoa` = '$id'");
  $resgisto1 = $con->query($query1, PDO::FETCH_ASSOC);
  $res1 = $resgisto1->fetch();

  $fb = $res1['facebook'];
  $git = $res1['github'];
  $link = $res1['linked_in'];
  $insta = $res1['insagram'];

  $query2 = ("SELECT * FROM `contacto` WHERE `id_pessoa` = 'a001'");
  $registo2 = $con->query($query2, PDO::FETCH_ASSOC);
  $res2 = $registo2->fetch();

  $cell1 = $res2['celular1'];
  $cell2 = $res2['celular2'];
  $email1 = $res2['email1'];
  $email2 = $res2['email2'];
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>
<body>
  
  <!-- navbar begin-->
  <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
    <div class="container-lg">
      <a class="navbar-brand text-danger fw-bold fs-4" href="#"></a>
      <div class="dropdown">
        <button class="btn btn-secondary btn-secondary px-4" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#inicio">Inicio</a></li>
          <li><a class="dropdown-item" href="#sobre">Sobre</a></li>
          <li><a class="dropdown-item" href="#servicos">Serviços</a></li>
          <li><a class="dropdown-item" href="#trabalhos">Trabalhos</a></li>
          <li><a class="dropdown-item" href="#formacao">Formação</a></li>
          <li><a class="dropdown-item" href="#contactos">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end-->

  <!--Section inicio-->
    <section class="inicio py-5" id="inicio">
      <div class="container-lg">
        <div class="row min-vh-100 align-itens-center align-content-center">
          <div class="col-md-6 mt-5 mt-md-0">
            <div class="home-img text-center">
              <img src="../img/Angel.jpg" class="rounded-circle mw-100" alt="profile img">
            </div>
          </div>
          <div class="col-md-6 mt-5 mt-md-0 order-md-first">
            <div class="home-text">
              <h1 class="text-danger text-uppercase fs-1 fw-bold"><?php echo $nome ;?></h1>
              <h2 class="text-uppercase fw-bold"><?php echo $profissao ;?></h2>
              <h2 class="text-uppercase fw-bold">Web Designer</h2>
              <h2 class="mt-4 text-muted">futuramente</h2>
              <p>Uma pessoa que se esforça diariamente para realizar com sucesso todos os objectivos que me são propostos </p>
              <a href="#sobre" class="btn btn-secondary px-3 mt-3">Sobre mim</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--Section Fim-->

  <!-- Sobre -->
    <section class="sobre py-5" id="sobre">
      <div class="container-lg py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2 class="fw-bold mb-5">Sobre mim</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="about-text">
              <h3 class="fs-4 mb-3">Breve Resumo</h3>
              <p class="text-muted">
              <?php echo $resumo ;?>
            </p>
            </div>
            <div class="row">
              <div class="col-lg-12 d-flex align-itens-center">
                <a href="../cv/CV-Angel-2022.pdf" target="_blank" class="btn px-3 btn-secondary me-5">Download CV</a>
                <div class="social-links">
                  <a href="<?php echo $fb ;?>" target="_blank" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                  <a href="<?php echo $git ;?>" target="_blank" class="text-dark me-2"><i class="fab fa-github"></i></a>
                  <a href="<?php echo $insta ;?>" target="_blank" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                  <a href="<?php echo $link ;?>" target="_blank" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-5 mt-md-0">
            <div class="skill-item mb-4">
              <h3 class="fs-6">Ladder-PLC</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">SQL-SERVER</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">PHP</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">HMTL5</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">CSS</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">Java</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">C#</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="skill-item mb-4">
              <h3 class="fs-6">MYSQL</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Sobre/ -->

  <!-- Formação -->
    <section class="formacao " id="formacao">
      <div class="container-lg py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2 class="fw-bold mb-5">Formações</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="form-itens shadow-sm p-4 rounded">
              <div class="icon my-3 text-secondary fs-2">
                <i class="fas fa-school"></i>
              </div>
              <h3 class="fs-5 py-2 text-capitalize">Escola Secundario Joaquim Alberto Chissano</h3>
              <p class="text-muted">Ensino geral completo em 2018</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="form-itens shadow-sm p-4 rounded">
              <div class="icon my-3 text-secondary fs-2">
                <i class="fas fa-school"></i>
              </div>
              <h3 class="fs-5 py-2 text-capitalize">Instituto Industrial de Maputo</h3>
              <p class="text-muted">Ensino Tecnico profissional em eléctricidade industrial concluido em 2019</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="form-itens shadow-sm p-4 rounded">
              <div class="icon my-3 text-secondary fs-2">
                <i class="fas fa-school"></i>
              </div>
              <h3 class="fs-5 py-2 text-capitalize">Universidade Joaquim Chissano</h3>
              <p class="text-muted">Licenciatura em engenharia em tecnologias e sistemas de informação em curso</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Formação/ -->

  <!-- Serviços -->
    <section class="servico py-5" id="servicos">
      <div class="container-lg py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2 class="fw-bold mb-5">Serviços</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-item shadow-sm p-4 rounded ">
              <div class="icon my-3 text-secondary fs-2">
                <i class="fas fa-tools"></i>

              </div>
              <h3 class="fs-5 py-2">Electricista</h3>
              <p class="text-muted">Trabalha com instrumentação e
                equipamentos eléctricos na
                implementação de projectos de
                energias renováveis e
                manutenção industrial. </p>
            </div>
          </div>
        
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-item shadow-sm p-4 rounded ">
              <div class="icon my-3 text-secondary fs-2">
                <i class="fas fa-code"></i>

              </div>
              <h3 class="fs-5 py-2">Denselvolvedor</h3>
              <p class="text-muted">Densevolvimento Com auxilio de linguagens de programação
                tais como Java, PHP, C#, C e Javascript.
              </p>
            </div>
          </div>
        
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-item shadow-sm p-4 rounded ">
              <div class="icon my-3 text-secondary fs-2">
                <i class="fas fa-image"></i>

              </div>
              <h3 class="fs-5 py-2">Design Grafico</h3>
              <p class="text-muted"> captura e edição de imagens usando
                Photoshop, GIMP e Adobe Illustrator </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Serviços/ -->

  <!-- Portfolio -->
    <section class="trabalhos py-5" id="trabalhos">
      <div class="container-lg py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2 class="fw-bold mb-5">Alguns trabalhos</h2>
            </div>
          </div>
        </div>
        <!-- carousel -->
        <div class="row justify-content-center">
          <div class="col-6 col-md-4">
            <div id="carousel1" class="carousel slide" data-bs-ride = "carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active bg-secondary"></li>
                <li data-bs-target="#carousel1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel1" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                    <div class="portfolio-item carousel-item d-flex align-items-center ">
                      <img src="../img/img1.jpg" class="w-100 img-thumbnail rounded-circle" alt="portfolio-item">
                      <h3 class="text-capitlize fs-5 my-2"></h3>
                      <p class="mb-4 text-muted"></p>
                    </div>
                  

                  
                    <div class="portfolio-item carousel-item">
                      <img src="../img/Angel.jpg" class="w-100 img-thumbnail" alt="portfolio-item">
                      <h3 class="text-capitlize fs-5 my-2"></h3>
                      <p class="text-muted"></p>
                    </div>
                 
                    <div class="portfolio-item carousel-item">
                      <img src="../img/img1.jpg" class="w-100 img-thumbnail" alt="portfolio-item">
                      <h3 class="text-capitlize fs-5 my-2"></h3>
                      <p class="text-muted"></p>
                    </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  <!-- Portfolio/ -->

  <!-- Freelancer -->
    <section class="freelancer py5 bg-secondary">
      <div class="container-lg py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <p class="text-light fs-5">Tem algum projecto em mente ou um trabalho de instalação eléctrica ou manutenção eléctrica industrial?</p>
            <h3 class="fs-1 text-dark mb-4">Disponivel para trabalho</h3>
            <a href="#contactos" class="btn btn-outline-light">Contrate-me</a>
          </div>
        </div>
      </div>
    </section>
  <!-- Freelancer/ -->

  <!-- Contacto -->
    <section class="contacto py-5" id="contactos">
      <div class="container-lg py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2 class="fw--bold mb-5">Contactos</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="contact-item d-flex mb-3">
              <div class="icon fs-4 text-secondary">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="texto ms-3">
                <h3 class="fs-5">Email</h3>
                <p class="text-muted m-0"><?php echo $email1 ;?></p>
              </div>
            </div>

            <div class="contact-item d-flex mb-3">
              <div class="icon fs-4 text-secondary">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="texto ms-3">
                <h3 class="fs-5">Email</h3>
                <p class="text-muted m-0"><?php echo $email2 ;?></p>
              </div>
            </div>

            <div class="contact-item d-flex mb-3">
              <div class="icon fs-4 text-secondary">
                <i class="fas fa-phone"></i>
              </div>
              <div class="texto ms-3">
                <h3 class="fs-5">Celular</h3>
                <p class="text-muted m-0"><?php echo $cell1 ;?></p>
              </div>
            </div>

            <div class="contact-item d-flex mb-3">
              <div class="icon fs-4 text-secondary">
                <i class="fas fa-phone"></i>
              </div>
              <div class="texto ms-3">
                <h3 class="fs-5">Celular</h3>
                <p class="text-muted m-0"><?php echo $cell2 ;?></p>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="contacte-me">
              <form action="index.php" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" class="form-control form-control-lg fs-6 border-0 shadow-sm" placeholder="Informe seu nome" name="nome">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control form-control-lg fs-6 border-0 shadow-sm" placeholder="Informe seu email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 mb-4">
                    <input type="text" class="form-control form-control-lg fs-6 border-0 shadow-sm" placeholder="Assunto" name="assunto">
                  </div>

                  <div class="col-lg-12 mb-4">
                    <textarea rows="5" placeholder="Mensagem" class="form-control form-control-lg fs-6 border-0 shadow-sm" name="mensagem">
                    </textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-secondary px-3" name="submit">Enviar Mensagem</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Contacto/ -->

  <footer class="footer border-top py-4">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12">
          <p class="m-0 text-center">&copy; Angel Banze 2022</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="../Js/bootstrap.bundle.min.js"></script>
</body>
</html>