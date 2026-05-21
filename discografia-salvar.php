<?php

$artista = htmlspecialchars($_POST['artista']);
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = urlencode($_POST['foto']);

echo "Artista: $artista - Nome: $nome - Ano de lançamento: $ano - Tipo: $tipo - URL da Capa: $foto";

$conn = mysqli_connect("localhost", "root", "", "db_spotify");

if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

$sqlInserir = "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) VALUES('$artista', '{$nome}', $ano, '$tipo', '$foto')";

$resultado = mysqli_query($conn, $sqlInserir);

if($resultado){
    echo "Cadastrado com sucesso!";
}
else{
    echo "Houve algum problema.";
}

mysqli_close($conn);

?>