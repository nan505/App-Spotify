<?php

$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";

?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de Discografias</h1>

        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Artista</th>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Tipo</th>
                    </tr>
                    <?php

                    include "inc-conexao.php";
                    
                    $sql = "SELECT * FROM tb_discografia ORDER BY artista, ano";
                    $resultado = mysqli_query($conn, $sql);

                    while($linha_resultado = mysqli_fetch_assoc($resultado) ){
                        echo '<tr>';

                        echo "<td> {$linha_resultado['id']} </td>";
                        echo "<td> {$linha_resultado['artista']} </td>";
                        echo "<td> {$linha_resultado['nome']} </td>";
                        echo "<td> {$linha_resultado['ano']} </td>";
                        echo "<td> {$linha_resultado['tipo']} </td>";

                        echo '</tr>';
                    }

                    mysqli_close($conn)

                    ?>
                </table>
            </div>
        </div>

    </main>

<?php include "inc-rodape.php"; ?>