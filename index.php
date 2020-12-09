<!DOCTYPE html>
<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/page.css">


    <title>Escreva.aqui - seu bloco de notas on-line</title>

  </head>
  <body class="bg-secondary">

    <div class="container">

    <h1 class="text-center text-white-50 mt-5 display-4">Escreva.aqui</h1>
    <p class="text-center text-white-50 mb-4">[ Seu bloco de notas on-line ]</p>
    <div class="jumbotron">

        <?php

      
            if (isset($_GET['include'])){

                if (isset($_GET['page'])) {

                $page = 'controller/' . $_GET['page'] . '.php';

                }else{

                    $_GET['page'] = null;
                    $page = null;
                }

                if (file_exists($page)) {

                    include $page;

                } else {

                echo "teste";

                }   

            } else {

                include 'view/home.view.php';

            }

        ?>

      </div>
       <p class="text-white-50 text-center"><?php echo date("Y")?>. desenvolvido por <a href="https://github.com/renatorobot" target="_blank" class="text-white-50"><u>Renato Andrade</u></a></p>
    </div>
  </body>
</html>

