<?php

    include("../../../system/controller/conexao.php");

    if(isset($_POST[ok]));{

      $email = $mysqli->escape_string($_POST['email']);
      
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $erro[] = "E-mail inválido.";

      }

        $sql_code = "SELECT senha, codigo FROM usuario WHERE email = '$_SESSION[email]'";
        $sql_query =$mysqli->query($sql_code) or die($mysqli->error);
        $dado=$sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

       if($total == 0)
          $erro[] = "O e-mail informado não existe no banco de dados."; 

      if(count($erro) == 0 &&$total >0) {


          $novasenha = substr(md5(time()), 0, 6);
          $nscriptografada = md5(md5($novasenha));
          

          if(mail($email, "Sua nova senha", "Sua nova senha: " .$novasenha)){
  
          $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
          $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

          }
          
        }

    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!--css-->
   <link rel="stylesheet" href="../../../resources/css/main_preloader.css">
   <link rel="stylesheet" href="../../../resources/css/main_login.css">
   <link rel="stylesheet" href="../../../resources/css/main_style.css"> 
   <!--css-->

   <script src="../../../resources/js/mostrar_&_ocultar_senha.js"></script>
  

    <title>Adotpet</title>

     <!--favicon-->

<link rel="apple-touch-icon" sizes="57x57" href="../../../resources/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../../../resources/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../../resources/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../../../resources/img/favicon.icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../../resources/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../../../resources/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../../../resources/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../../../resources/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../../../resources/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../../../resources/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../../resources/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../../resources/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../../resources/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../../../resources/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#38b6ff">
<meta name="msapplication-TileImage" content="../../../resources/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#38b6ff">

    <!--fim favicon-->
    
  </head>
  <body>
    <?php if (count ($erro) > 0)
        foreach($erro as $msg){
            echo "<p>$msg</p>";

        }

     ?>   
    
    <header>
  
      <nav class="navbar navbar-light corPrimaria">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="../../../index.html">
            <img src="../../../resources/img/icone_navbar.png" alt="" width="30" height="24">
            Adotpet
          </a>
        
        </div>
      </nav>
 
         
  
    </header>

    <br>
    <br>
    <br>

    <section class="container"><!--barra de dados-->
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center text-dark"></div>
        <h1 class="display-4 text-center">Redifir Senha</h1>
   
 <form action= "" method="POST" class="container"><!--link do servidor-->
  
  <div class="mb-3">
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu email.">
    <label for="exampleFormControlInput1" class="form-label text-dark">Email:</label>
  </div>

     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label text-dark">Senha:</label>
         <input type="password" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha.">
       </div>

     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label text-dark">Repetir Senha:</label>
         <input type="password" name="message" class="form-control" id="exampleInputPassword2" placeholder="Digite sua senha novamente.">
       </div>

       <div class="mb-3 form-check">
        <label class="form-check-label" for="exampleCheck1">_Exibir Senha</label>
        <input type="checkbox" class="form-check-input" onclick="mostrarOcultarSenha(),mostrarOcultarSenha2() " id="exampleCheck1">
      </div>

      <div class="d-grid gap-2 col-6 mx-auto"><div class="d-grid gap-2 col-6 mx-auto"></div>
    <input type="submit" class="btn btn-primary" name="ok"  id="submit" value="ok">
  </div>

 </form>

  <br><br><br><br><br><br>
  </section>

          <br>
          <br>
          <br>

           <!--preloader-->

    <div class="overlay">
      <div class="loader"></div>
    </div>
  <script src="../../../resources/js/preloader.js"></script> 

  <!--preloader-->

  <footer class="py-3 my-4 corPrimaria">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
     
      <li class="nav-item"><a href="../public/quem_somos.html" class="nav-link px-2  text-white">Quem nós somos?</a></li>
      <li class="nav-item"><a href="../public/doacoes.html" class="nav-link px-2  text-white">Doações</a></li>
      <li class="nav-item"><a href="../public/contato.html" class="nav-link px-2  text-white">Contato</a></li>
      <li class="nav-item"><a href="../public/politica_de_privacidade.html" class="nav-link px-2  text-white">Política de Privacidade</a></li>
      
    </ul>
    <p class="text-center text-white">© 2021 Adotpet Company, Inc</p>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>