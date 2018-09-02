<!--
    Código fr frontend feito com framework Bootstrap 4, utilizando ainda ajax para 
    envio de informações para o backend.
-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sistema Base</title>

    <!-- Bootstrap core CSS -->
    <link href="../style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style/css/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../style/css/style-projeto.css" rel="stylesheet">
    
    <!--Jquery script para efeito de Toggle-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#acomp1").click(function(){
            $('#input_one').hide();            
        });
        $("#acomp2").click(function(){
            $('#input_one').hide();
            $('#input_two').hide(); 
        });
        $("#acomp3").click(function(){
            $('#input_one').hide();
            $('#input_two').hide(); 
            $('#input_tree').hide();
        });
    });
    </script>
  </head>

    <body class="text-center">
        <form class="form-signin">
            <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Incluir Usuário</h1>      
            <input type="" id="" class="form-control" placeholder="Usuário" autofocus>
            <div class="checkbox mb-3"></div>
            <div class="checkbox mb-3">
                Acompanhantes
            </div>
            <button id="acomp1" class="btn btn-primary button_change">1</button>
            <button id="acomp2" class="btn btn-primary button_change">2</button>
            <button id="acomp3" class="btn btn-primary button_change">3</button>
            <div class="checkbox mb-3"></div>
            
            <input id="input_one" class="form-control" placeholder="Acompanhante 1" >
            
            <input id="input_two" class="form-control" placeholder="Acompanhante 2" >
            
            <input  id="input_tree" class="form-control" placeholder="Acompanhante 3" >            
            <div class="checkbox mb-3"></div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </body>
</html>
