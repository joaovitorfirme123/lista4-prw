<?php

    $nome = htmlspecialchars($_POST['nome']);
    $idade = (int) $_POST['idade'];
    $dias_de_vida = $idade * 365;

    
    echo "<h1>Resultado</h1>";
    echo "<p>$nome, você tem aproximadamente $dias_de_vida dias de vida.</p>";
    echo "<a href='index.html'>Voltar</a>";


?>
