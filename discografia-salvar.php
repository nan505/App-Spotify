<?php

$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

echo "Artista: $artista - Nome: $nome - Ano de lançamento: $ano - Tipo: $tipo - URL da Capa: $foto";

$conn = mysqli_connect("localhost", "root", "", "db_spotify");

if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

$resultado = mysqli_execute_query($conn, "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) VALUES(?, ?, ?, ?, ?)", 
[$artista, $nome, $ano, $tipo, $foto]);

if($resultado){
    echo "Cadastrado com sucesso!";
}
else{
    echo "Houve algum problema.";
}

mysqli_close($conn);

?>