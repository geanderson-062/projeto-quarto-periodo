<?php
// Verificador de sessão
require "../../../system/controller/verificar_login.php";


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
<link rel="apple-touch-icon" sizes="180x180" href="../../../resources/img/favicon/apple-icon-180x180.png">
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
        <h1 class="display-4 text-center">Histórico</h1>

        <br>
        <br>
        <br>

        <h1 class="display-10 text-center">Animais adotados</h1>

        <br>

        <!--caso não tenha adotado 
        
        <h1 class="display-10 text-center">Você não adotou nenhum animal ainda!

             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
               <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
             </svg>

        </h1>
        
        -->

        <div class="card">
            <h5 class="card-header">Nome do animal</h5>
            <div class="card-body">
              <h5 class="card-title">data em que foi adotado</h5>
              <a href="" class="btn btn-primary">Baixar comprovante
                  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            
            </a>
            </div>
           </div>

           <br>
           
        <div class="card">
            <h5 class="card-header">Nome do animal</h5>
            <div class="card-body">
              <h5 class="card-title">data em que foi adotado</h5>
              <a href="" class="btn btn-primary">Baixar comprovante  
                  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            
            </a>
            </div>
           </div>

           <br>
           
        <div class="card">
            <h5 class="card-header">Nome do animal</h5>
            <div class="card-body">
              <h5 class="card-title">data em que foi adotado</h5>
              <a href="" class="btn btn-primary">Baixar comprovante 
                  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            
            </a>
            </div>
           </div>

           <br>

           <h1 class="display-10 text-center">Animais publicados</h1>

           <br>

              <!--caso não tenha publicado 
        
        <h1 class="display-10 text-center">Você não publicou nenhum animal ainda!

             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
               <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
             </svg>

        </h1>
        
        -->
           
        <div class="card">
            <h5 class="card-header">Nome do animal</h5>
            <div class="card-body">
              <h5 class="card-title">data em que foi adotado</h5>
              <a href="" class="btn btn-primary">Baixar comprovante  
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            
            </a>
            </div>
           </div>

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