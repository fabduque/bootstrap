<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Página de conexão ao banco de dados</title>
</head>
<body>
<!-- O script PHP começa abaixo -->

<?php
    conecta.php - script de conexão ao servidor MySQL
    if (!($con = @mysql_connect ("localhost", "duque", "duque")))
    {
        die ("Não foi possível conectar ao servidor. <br />");
    }
    print ("Conexão bem sucedida. <br />");
    if (!@mysql_select_db ("teste", $con))
    {
        die ("Não foi possível selecionar o banco de dados. <br />");
    }
    mysql_close ($con);
    print ("Conexão terminada. <br />");
?>

<!-- Fim do script PHP -->
</body>
</html>