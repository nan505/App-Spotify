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

        $id = $_GET['id'];
        $artista = $nome = $ano = $tipo = $foto = "";

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

            echo "
                <div class='card' style='width: 18rem;'>
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
            ";
        }

        ?>

    </main>

<?php 

mysqli_close($conn);
include "inc-rodape.php";

?>