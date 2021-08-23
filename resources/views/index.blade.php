<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Jamerson Walderson">
  <meta name="description" content="Projeto desenvolvido durante o desafio para a vaga  vaga FullStack PHP Jr na Mesha.">
  <!-- /meta -->

  <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
  <!-- /css -->

  <title>Clinica lorem ipsum</title>
</head>
<body>

  <section id="banner" class="d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ URL::asset("assets/image/pexels-karolina-grabowska-4386467.jpg") }}');">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 id="banner-title">Clinica lorem ipsum</h1>
          <p class="">Excelência em procedimentos cirúrgicos a preços acessíveis</p>
        </div>
      </div>
    </div>
  </section>

  <main>
    <div class="container py-5">
      <h3 class="text-uppercase text-center py-5">NOSSOS PROCEDIMENTOS</h3>
      <div class="row">
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}">
            <p class="py-2">Cirurgia lorem ipsum</p>
            <img src="http://via.placeholder.com/1024x720" class="img-fluid img-speciality">
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}">
            <p class="py-2">Cirurgia lorem ipsum</p>
            <img src="http://via.placeholder.com/1024x720" class="img-fluid img-speciality">
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}">
            <p class="py-2">Cirurgia lorem ipsum</p>
            <img src="http://via.placeholder.com/1024x720" class="img-fluid img-speciality">
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}">
            <p class="py-2">Cirurgia lorem ipsum</p>
            <img src="http://via.placeholder.com/1024x720" class="img-fluid img-speciality">
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}">
            <p class="py-2">Cirurgia lorem ipsum</p>
            <img src="http://via.placeholder.com/1024x720" class="img-fluid img-speciality">
          </a>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <section id="footer-info">
      <div class="container-fluid p-5">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center">
            <div class="row">
              <div class="col-md-6">
                <p>ABOUT</p>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Taxy</a></li>
                  <li><a href="#">Calculator</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <p>CONTACT</p>
                <ul>
                  <li><a href="#">Basic Info</a></li>
                  <li><a href="#">Map</a></li>
                  <li><a href="#">Contact form</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-sm-end d-flex justify-content-center">
            <a href="#"><i class="fab fa-facebook rounded-circle fa-2x mx-2"></i></a>
            <a href="#"><i class="fab fa-twitter rounded-circle fa-2x mx-2"></i></a>
            <a href="#"><i class="fab fa-instagram rounded-circle fa-2x mx-2"></i></a>
          </div>
        </div>
      </div>
    </section>
</footer>
  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>