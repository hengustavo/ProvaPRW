<?php
        include('includes/conexao.php');
        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];

        echo "<h1>Dados do Fluxo</h1>";
        echo "Data: $data<br>";
        echo "tipo: $tipo<br>";
        echo "valor: $valor<br>";
        echo "Histórico: $historico<br>";
        echo "Cheque: $cheque<br>";

        $sql = "INSERT INTO fluxo_caixa
                (data ,tipo ,valor ,historico ,cheque )";
        $sql .= "VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";

        //EXECUTA COMANDO NO BANCO DE DADOS
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }

    ?>
    <a href="index.php"><input type="button" value="Voltar ao Inicio"></a>