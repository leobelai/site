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
            <div class="well"> <h1> Página Inicial </h1>
                <hr />
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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