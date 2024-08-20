<?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Fluxo_caixa";
        // Executa a consulta 
        $result = mysqli_query($con, $sql);     
    ?>
    <h1>Consulta de Fluxo</h1>
    <a href="Cadastro_fluxo_caixa.html"><input type="button" value="Cadastrar novo Fluxo"></a>
    <table align="center" border="'" width="500">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php //mysqli fetch_array lê uma linha por vez
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$dataformatada."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td><a href='alteraFluxo.php?id=".$row['id']."' class='btn btn-warning btn-sm'>Alterar</a></td>";
                echo "<td><a href='excluirFluxo.php?id=".$row['id']."' class='btn btn-danger btn-sm'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a href="index.php"><input type="button" value="Voltar ao Inicio"></a>