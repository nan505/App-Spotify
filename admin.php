<?php

$titulo_da_pagina = "Administrador";
include "inc-cabecalho.php";

?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>

        <h1 class="text-center text-success mt-5"><i class="bi bi-spotify"></i>
        Spotify</h1>

        <div class="row">
            <div class="col">
                <a href="discografia-formulario.php" class="btn btn-success">Nova discografia</a>
            </div>
        </div>
    </main>

    <?php include "inc-rodape.php"; ?>