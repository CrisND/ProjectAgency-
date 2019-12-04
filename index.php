<?php

$servicos = [
  
  ["imagem"=>"images/blog.svg", "título"=>"Blog", "descrição"=>"descrição do serviço 1"],

  ["imagem"=>"images/undraw_add_to_cart_vkjp.svg", "título"=>"Loja Virtual", "descrição"=>"descrição do serviço 2"],

  ["imagem"=>"images/undraw_about_me_wa29.svg", "título"=>"Sites", "descrição"=>"descrição do serviço 3"]

];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>    

        <!-- Just an image -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="images/Logo.png" width="180" height="100" alt="">
    </a>

        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contato</a>
            </li>
          </ul>
</nav>
</header>

    <section id="banner">
        <h2>Compre nossos produtos!</h2>

    </section>

    <section id="serviço" class="container mt-5">   
        <div class="row">

        <?php foreach($servicos as $servico){ ?>

            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $servico["imagem"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                        <?php echo $servico["título"]; ?>
                      </h5>
                      <p class="card-text">
                        <?php echo $servico["descrição"]; ?>
                      </p>
                      <a href="#" class="btn btn-primary">Contrate Agora!</a>
                    </div>
                  </div>
            </div>
        <?php } ?>

        </div>

    </section>

    <section id="Sobre" class="container mt-5">
                    <div class="row">
              <div class="col-md-6">
                <img src="images/undraw_team_spirit_hrr4.svg" class="img-fluid" alt="...">
              </div>
              <div class="col-6 d-flex justify-content-center flex-column">
                <div class="body">
                  <h1 class="title">Sobre nós</h1>
                  <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolores repellendus ipsum doloremque enim rerum, itaque laboriosam deserunt obcaecati facere optio commodi amet distinctio ex a dolorem ab temporibus delectus.</p>
                </div>
              </div>
            </div>
          </div>

    </section>


</body>
</html>