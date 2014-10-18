<meta charset="UTF-8">
<?php
echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou<br>";
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];
echo "
Nome : $nome <br />
Email : $email <br />
Assunto : $assunto <br/>
Mensagem : $msg <br />
";
?>