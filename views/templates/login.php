

<div class="wrapper fadeInDown">

    <?php 
     \controllers\LoginController::LoginPag();   
    ?>

  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->


    <form class="formulario" method="post" > 
      <input type="text" name="email" class="fadeIn second" placeholder="Digite seu Email ">
      <input type="text" name="senha" class="fadeIn third" placeholder="Digite sua senha ">
      <input name="login" type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="cadastrar">Faça seu Cadastro</a>
    </div>
  </div>
</div>
   
  <div class="alturalogin"></div>   

