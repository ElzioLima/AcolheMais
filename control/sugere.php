<?php
    
    require_once("bd_connect.php");
    
    $sugestao = filter_input(INPUT_POST, 'sugest', FILTER_SANITIZE_STRING);

    //$sugestao = $_POST['sugest'];

    $sql = "INSERT INTO `sugestao_plataforma` (sugestao) VALUES ('$sugestao')";

    $result = mysqli_query($conn, $sql);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p>Sugestão enviada com sucesso!!!</p>";
        header("Location: ../sugerirPlataforma.php");
    }
    else{
        echo ("Erro ao inserir dados!!! ");
        //echo ("Dados salvos: "."$sugestao"); debug
        header("Location: ../index.html");
    }

?>
