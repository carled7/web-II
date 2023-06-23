<?php 
    require_once('./conexao.php');


    $res = $pdo->prepare(
        "SELECT * FROM contact_messages");

    $result = $res->execute();

    echo $result;
    echo"<script>window.location.assign('./obrigado.php');</script>";
?>