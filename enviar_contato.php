<?php 
    require_once('./conexao.php');

    date_default_timezone_set('America/Sao_Paulo');

    $dateVar = date('Y/m/d');
    $nameVar = $_POST['name'];
    $emailVar = $_POST['email'];
    $subjectVar = $_POST['subject'];
    $messageVar = $_POST['message'];

    if($nameVar == ""){
        echo 'Preencha o nome.';
        exit();
    }

    if($emailVar == ""){
        echo 'Preencha o email.';
        exit();
    }

    if($subjectVar == ""){
        echo 'Preencha o assunto.';
        exit();
    }

    if($messageVar == ""){
        echo 'Preencha a mensagem.';
        exit();
    }

    $res = $pdo->prepare(
                        "INSERT INTO contact_messages (name, email, subject, message, date)
                         VALUES (:nameVar, :emailVar, :subjectVar, :messageVar, :dateVar)");
    $res->bindValue(':nameVar', $nameVar);
    $res->bindValue(':emailVar', $emailVar);
    $res->bindValue(':subjectVar', $subjectVar);
    $res->bindValue(':messageVar', $messageVar);
    $res->bindValue(':dateVar', $dateVar);

    $res->execute();

    //echo 'ok';
    echo"<script>window.location.assign('./obrigado.php');</script>";
?>