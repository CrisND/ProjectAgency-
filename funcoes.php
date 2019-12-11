<?php

$servicos = [
  
  ["imagem"=>"blog.svg", 
  "título"=>"Blog", 
  "descrição"=>"descrição do serviço 1"],

  ["imagem"=>"undraw_add_to_cart_vkjp.svg", 
  "título"=>"Loja Virtual", 
  "descrição"=>"descrição do serviço 2"],

  ["imagem"=>"undraw_about_me_wa29.svg", 
  "título"=>"Sites", 
  "descrição"=>"descrição do serviço 3"]

];

function listarServicos(){
    global $servicos; 
    foreach ($servicos as $servico) {
       
        echo "<div class='col-4'>
    <div class='card'>
    <img src='images/".$servico['imagem']."' class='card-img-top' alt='...'>

    <div class='card-body'>
      <h5 class='card-title'>".$servico['título']."</h5>
      <p class='card-text'>".$servico['descrição']."</p>
      <a href='#' class='btn btn-primary'>Contrate Agora!</a>
    </div>
  </div>
</div>";
        
    }

}

?>
