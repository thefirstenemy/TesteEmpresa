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
        $("#acomp").click(function(){
            $('#hide').toggle();            
        });        
    });
    </script>
  </head>
    <body class="text-center">
        <form class="form-signin" action="#" method="">
            <img class="mb-4" src="" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Incluir Usuário</h1>      
            <input type="" id="" class="form-control" placeholder="Usuário" autofocus>
            <div class="checkbox mb-3"></div>
            <div class="checkbox mb-3"></div>
                <button id="acomp" class="btn btn-primary button_change">Acompanhantes</button>            
            <div class="checkbox mb-3"></div>            
            <p id="hide">
                <input id="input_one" class="form-control" placeholder="Acompanhante 1 (Não Obrigatório)" >                
                <input id="input_two" class="form-control" placeholder="Acompanhante 2 (Não Obrigatório)" >                
                <input  id="input_tree" class="form-control" placeholder="Acompanhante 3 (Não Obrigatório)" >            </div>            
            <p class="checkbox mb-3"></div>
            <button id="send" class="btn btn-lg btn-primary btn-block">Enviar</button>
            <div class="checkbox mb-3"></div>
            <div class="checkbox mb-3"></div>
            <button id="listUser" class="btn btn-lg btn-primary btn-block">Lista de Usuários</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            <div id="dialog" title="Basic dialog">
                <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
            </div>
        </form>        
    </body>
    <script>
        $('#send').click(function(){
            var User = $('#user').val();
            var Acomp1 = $('#acomp1').val();
            var Acomp2 = $('#acomp2').val();
            var Acomp3 = $('#acomp3').val();
            if(User == " " || User == null){                
                setTimeout(function(){
                   text.hide(
                        $('#dialog').toggle(); 
                    );
                }, 1000);
            }else{
                $.ajax({
				method: "POST",
				url: "../index.php",
				data: {
						method: 'UserInsert',
						parameter : {
                            user : User , 
                            acomp1: Acomp1, 
                            acomp2: Acomp2, 
                            acomp3: Acomp3}
					},
				}).done(function( msg ) {
					console.log(msg);
	       		});
            }
        });
        $('#send').click(function(){
            location.href = "www.google.com"
        });
    </script>
</html>