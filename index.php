<?php
$localhost=" 127.0.0.1";
$username="root";
$password=""; //root
$database="lorenzo_foda";

$conect= new mysqli($localhost,$username, $password, $database);

if($conect -> connect_error){

    die("Fail to conect to data" . $conect->connect_errno);

}else{
    $nome=$_POST["name"];
    $SQL="INSERT INTO `gay`(`name`) VALUES($nome)";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caralhooo</title>
</head>
<body>
    <form action="index.php">
    <H1>nome</H1>
    <input type="text" placeholder="Nome" name="name">
    <input type="submit">

</form>
</body>
</html>