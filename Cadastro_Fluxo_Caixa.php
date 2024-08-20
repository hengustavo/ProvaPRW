<?php
        include('includes/conexao.php');
        $data = $_POST['data'];
        $tipo = $_POST['entrada'];
        $valor = $_POST['number'];
        $historico = $_POST['historico'];

        echo "<h1>Dados do Fluxo Caixa</h1>";
        echo "Nome: $fluxo_caixa<br>";

        // INSERT INTO Cidade (nome, estado)
        // VALUES ('$nome, $estado')
        $sql = "INSERT INTO Fluxo (, )";
        $sql .= "VALUES('".$nome."', '".$estado."')";
        echo $sql;
        // executa comando no banco de dados 
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>