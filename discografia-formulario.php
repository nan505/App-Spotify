<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>

        <section class="d-flex flex-column align-items-center">
            <h1 class="text-primary-emphasis fs-2 mt-2">Cadastro de Discografia</h1>
            <br>
            <div class="card p-4">
                <form action="discografia-salvar.php" method="post">
                    <label>Artista</label><br>
                    <input type="text" name="artista" required>

                    <br>

                    <label>Nome do álbum</label><br>
                    <input type="text" name="nome" required>

                    <br>

                    <label>Ano de lançamento</label><br>
                    <input type="number" name="ano" required>

                    <br>

                    <label>Tipo</label><br>
                    <select name="tipo" required>
                        <option value="album">Álbum</option>
                        <option value="single">Single</option>
                    </select>

                    <br>

                    <label>Foto</label><br>
                    <input type="text" name="foto" required>

                    <br><br>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-success">Limpar</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="d-flex flex-column justify-content-center align-items-center text-center bg-dark mt-3">
        <p class="text-light pt-3">Feito por: Nan Santos</p>
    </footer>
</body>
</html>