<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $User = $_POST['user'];
    $email = $_POST['email'];
    echo "<h1> Dados Recebidos: </h1>";
    echo "<p> User:" . htmlspecialchars($User)."</p>";
    echo "<p> Emai;:" . htmlspecialchars($email)."</p>";
}else{
    echo 'Nenhum dado recebido';
}
