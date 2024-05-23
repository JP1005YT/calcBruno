<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="../../index.php">Calculadora</a></li>
            <li><a href="../temperatura/">Temperatura</a></li>
            <li><a href="#">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="../../logica/processamento.php">
            <label>Digite o Número:</label>
            <input type="text" name="convertMedida" placeholder="Digite um número">
            <select name="selectOperacoes">
                <option value="CpM">Centimetros para Metros</option>
                <option value="MpC">Metros para Centimetros</option>
                <option value="MpK">Metro para Quilometros</option>
                <option value="KpM">Quilometros para Metro</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <h1 id="resultado">
            <?php
                //Verificando se existe a variavel de session resultado
                if(isset($_SESSION['resultado'])){
                    //Caso exista, utiliza um echo para exibir o resultado
                    echo $_SESSION['resultado'];
                    session_unset();
                }
            ?>
        </h1>
        <img src="../../img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>