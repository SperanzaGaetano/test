<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>

<form method="post" action="http://provatantoper.altervista.org/read.php">
Inserisci il tuo Nome: <input type="text" name="nome">
<br>
Inserisci la tua Email: <input type="text" name="email">
<br>
Domanda:
<br>
<textarea cols="50" rows="5" name="domanda"></textarea>
<br>
<input type="submit" value="Invia la tua richiesta">
</form>

<?php
 $str_nome = $_POST['nome'];
 $str_email = $_POST['email'];
 $str_domanda = $_POST['domanda'];
 echo "Il tuo nome è $str_nome";
 echo "<br>La tua email è $str_email";
 echo "<br>La tua richiesta è $str_domanda";
 ?>




</body>
</html>