<?php
include_once("conexao.php");

$id = 0;
if (isset($_GET['id']));
$id = $_GET['id'];


if ($id) {
    $conn = Conexao::getConexao();
    $sql = "DELETE FROM livro WHERE id = ?";
    $stm = $conn->prepare($sql);
    $stm->execute();

    //redireciona para a página livro.php
    header("Location: livros.php");
    exit;
} else {
    echo "ID do livro inválido.<br>";
    echo '<a href="livros_del.php">Voltar</a>';
}
