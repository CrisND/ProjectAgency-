
<?php
include_once('funcoes.php');
include_once('head.php');
?>

    <section id="banner">
        <h2>Compre nossos produtos!</h2>

    </section>

    <section id="serviço" class="container mt-5">   
        <div class="row">

        <?php echo listarServicos(); ?>

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


<?php
include_once('footer.php')
?>
