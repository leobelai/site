<html>
<head>
    <title>Pagina Incial</title>
    <meta charset="UTF-8">
    <!-- JQUERY -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

    <!-- TWITTER BOOTSTRAP CSS -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- TWITTER BOOTSTRAP JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
<div class="container-fluid"> <!-- CLASSE PARA DEFINIR UMA LINHA -->
    <div class="row-fluid"> <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
        <?php require_once('menu.php');?>
        <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
        <div class="span10">
            <div class="well"> <h1> Formulário </h1>
                <hr />
                <form action="recebe.php" method="post" name="form">
                    Nome
                    <br><input type="text" name="nome" size="50"><br>
                    Email
                    <br><input type="text" name="email" size="50"><br>
                    Assunto
                    <br><input type="text" name="assunto" size="50"><br>
                    Mensagem<br><textarea cols="20" rows="20" name="msg"></textarea><br>
                    <input type="submit" name="Enviar">
                </form>
                <hr />
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Todos os direitos reservados - <?php echo date("Y"); ?></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>