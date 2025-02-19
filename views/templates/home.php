<?php  
    
    /*
      if(isset($_SESSION['Logado'])){
       ?> 
       <a href="<?php echo INCLUDE_PATH; ?>servicos" class="btn">Agendar</a>
       <?php
      }else{
       ?>
       <a href="<?php echo INCLUDE_PATH; ?>login" class="btn">Agendar</a>
       <?php 
       }
       */
     ?>


<section class="hero-section">
    <div class="hero-content">
      <p class="subtitle">BARBEARIA ESTILO</p>
      <h1>Crie seu estilo <br> com agente</h1>
      <?php  
    
    
      if(isset($_SESSION['Logado'])){
       ?> 
       <a href="<?php echo INCLUDE_PATH; ?>servicos" class="cta-button">Agendar</a>
       <?php
      }else{
       ?>
       <a href="<?php echo INCLUDE_PATH; ?>login"class="cta-button">Agendar</a>
       <?php 
       }

     ?>
    </div>
    <div class="hero-image">
      <img src="<?php echo INCLUDE_PATH; ?>/views/templates/foto/Post do instagram para barbearia simples preto.png" alt="Barber cutting a beard">
    </div>
  </section>


  <section class="about-section" id="about">
    <div class="about-container">
      <div class="about-content">
        <h2>Sobre Nossa Barbearia</h2>
        <h3>Seja bem-vindo</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, porro. Nam ducimus voluptatum, deserunt sunt
          soluta quisquam, obcaecati quae, veritatis sit unde commodi laudantium magni aliquam.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla etiam commodo nulla ut tellus penatibus. Vitae
          senectus lorem ac nisi pharetra. Odio minima tempore, distinctio nesciunt, necessitatibus atque modi a animi
          reprehenderit dicta amet.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla etiam commodo nulla ut tellus penatibus. Vitae
          senectus lorem ac nisi pharetra.
        </p>
      </div>
    </div>
  </section>

  <div class="team-section" id="team">
    <div class="team-intro">
        <h1>Nosso Time</h1>
        <p>Profissionais em seus serviços</p>
    </div>
    <div class="team-cards">  
    <?php 
    $sql = \MySql::connect()->prepare("SELECT * FROM funcionarios");
    $sql->execute();
    foreach ($sql as $key => $value){   
    ?>
       <div class="card">
          <img src="imagembarbeiro/<?php echo $value['imagem'];  ?>" alt="Floyd Miles">
          <p class="name"><?php echo $value['nome_funcionario'];  ?></p>
        </div>
    <?php } ?>
       
    </div>
</div>

<div id="pricing" class="pricelist-section">
  <div class="pricelist-card">
      <h1>SERVIÇOS</h1>
      <ul>
      <?php 
      $sql = \MySql::connect()->prepare("SELECT * FROM servicos");
       $sql->execute(); 
       foreach ($sql as $key => $value) {  ?>
          <li>
              <span><?php echo $value['servico']; ?></span>
              <span><?php echo $value['preco']; ?></span>
          </li>
          <?php }?>

      </ul>
  </div>
</div>

