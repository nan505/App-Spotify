<?php

$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabecalho.php";

?>
<body>
    <header>
        <?php include "inc-menu.php"; ?>
    </header>

    <main class="container">
        <h1>Visualizar Discografia</h1>


        <?php

        include "inc-conexao.php";

        $id = $_GET['id'] ?? 0;
        $artista = $nome = $ano = $tipo = $foto = "";
        $i = 0;

        $sql = "";

        if($id > 0){
            $sql = "SELECT * FROM tb_discografia WHERE id = $id";
        }
        else{
            $sql = "SELECT * FROM tb_discografia ORDER BY nome, ano";
        }

        $resultado = mysqli_query($conn, $sql);

        while($linha = mysqli_fetch_assoc($resultado) ){
            $artista = $linha['artista'];
            $nome = $linha['nome'];
            $ano = $linha['ano'];
            $tipo = $linha['tipo'];
            $foto = $linha['foto'];

            if($tipo == 'album'){
                $tipo = 'Álbum';
            }
            else{
                $tipo = 'Single';
            }

            if($i % 4 == 0){
                echo "<div class='row'>";
            }

            echo "
                <div class='col-3'>
                    <div class='card' style='width: 16rem;'>
                        <img src='$foto' class='card-img-top' alt='$nome'>
                        <div class='card-body'>
                            <h5 class='card-title'>$nome</h5>
                            <p class='card-text'>Artista: $artista</p>
                        </div>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Categoria: $tipo</li>
                            <li class='list-group-item'>Ano de lançamento: $ano</li>
                        </ul>
                    </div>
                </div>
            ";

            if( ($i + 1) % 4 == 0){
                echo "</div>";
            }

            $i++;
        }

        if($i % 4 != 0){
            echo "</div>";
        }

        ?>

    </main>

<?php 

mysqli_close($conn);
include "inc-rodape.php";

?>