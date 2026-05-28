<?php

$titulo_da_pagina = "Cadastro de Discografia";
include "inc-cabecalho.php";

?>

<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>

        <section class="d-flex flex-column align-items-center">
            <h1 class="text-primary-emphasis fs-2 mt-2">Cadastro de Discografia</h1>
            <br>
            <div class="card p-4">
                <form action="discografia-salvar.php" method="post">
                    <label>Artista:</label><br>
                    <input type="text" name="artista" required>

                    <br>

                    <label>Nome do disco:</label><br>
                    <input type="text" name="nome" required>

                    <br>

                    <label>Ano de lançamento:</label><br>
                    <input type="number" name="ano" required>

                    <br>

                    <label>Tipo:</label><br>
                    <select name="tipo" required>
                        <option value="album">Álbum</option>
                        <option value="single">Single</option>
                    </select>

                    <br>

                    <label>URL da imagem de capa:</label><br>
                    <input type="text" name="foto" required>

                    <br><br>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-success">Limpar</button>
                </form>
            </div>
        </section>
    </main>

    <?php include "inc-rodape.php"; ?>
</body>
</html>