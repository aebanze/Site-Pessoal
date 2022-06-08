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
          <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
          <li><a class="dropdown-item" href="#cv">CV</a></li>
          <li><a class="dropdown-item" href="#contactos">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end-->

  <!--Section inicio-->
    <section class="home py-5" id="inicio">
      <div class="container-lg">
        <div class="row min-vh-100 align-itens-center align-content-center">
          <div class="col-md-6 mt-5 mt-md-0">
            <div class="home-img text-center">
              <img src="../img/Angel.jpg" class="rounded-circle mw-100" alt="profile img">
            </div>
          </div>
          <div class="col-md-6 mt-5 mt-md-0 order-md-first">
            <div class="home-text">
              <h1 class="text-danger text-uppercase fs-1 fw-bold">Angel Elias Banze</h1>
              <h2 class="text-uppercase fw-bold">Electricista de Profissão</h2>
              <h2 class="text-uppercase fw-bold">Web Designer</h2>
              <h2 class="text-uppercase fw-bold">Java EE developer</h2>
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
    <section class="about py-5" id="sobre">
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
              Sou um jovem formado em Eléctricidade Industrial pelo Instituto Industrial De Maputo,
              actualmente sou estudante de Engenharia em Tecnologias e Sistemas de Informação e estou neste
              momento disponível para novas experiências profissionais.
              Após ter terminado o meu curso técnico, realizei um estágio pré-profissional na MEREC
              INDUSTRIES SA, e agora trabalho como pré-oficial elétricista na SOELEC, estando assim a 2 anos no mercado de emprego.
            </p>
            </div>
            <div class="row">
              <div class="col-lg-12 d-flex align-itens-center">
                <a href="#" class="btn px-3 btn-secondary me-5">Download CV</a>
                <div class="social-links">
                  <a href="" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                  <a href="" class="text-dark me-2"><i class="fab fa-github"></i></a>
                  <a href="" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                  <a href="" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
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

  <!-- Serviços -->
    <section class="services py-5">
      <div class="container-lg pg-4">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h2 class="fw-bold mb-5">Serviços</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Serviços/ -->
  <script src="../Js/bootstrap.bundle.min.js"></script>
</body>
</html>