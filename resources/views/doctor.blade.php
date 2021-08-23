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
      <h3 class="text-uppercase text-center py-5">PROFISSIONAIS APTOS A REALIZAR O PROCEDIMENTO</h3>
      <div class="row">
        <!-- card -->
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pravatar.cc/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center">Profissional lorem ipsum</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat tempore expedita esse, voluptatum consequuntur corrupti quisquam aut at doloremque distinctio architecto nulla commodi, veritatis impedit earum adipisci corporis id obcaecati.</p>
                    <a href="" class="my-5">AGENDAR</a>
                </div>
            </div>
          </a>
        </div>
        <!-- /card -->

        <!-- card -->
        <div class="col-md-4 text-center">
          <a href="{{ route('speciality') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pravatar.cc/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center">Profissional lorem ipsum</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat tempore expedita esse, voluptatum consequuntur corrupti quisquam aut at doloremque distinctio architecto nulla commodi, veritatis impedit earum adipisci corporis id obcaecati.</p>
                    <a href="" class="my-5">AGENDAR</a>
                </div>
            </div>
          </a>
        </div>
        <!-- /card -->
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

<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agende sua consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form onSubmit="alert('Em breve entraremos em contato com você')">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Seu nome:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Como podemos te chamar?">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qual o melhor dia para voce?:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Digite aqui.">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Alguma observação?:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- /modal -->
  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>