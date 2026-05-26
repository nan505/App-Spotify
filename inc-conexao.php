<?php

$conn = mysqli_connect("localhost", "root", "", "db_spotify");

if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

?>