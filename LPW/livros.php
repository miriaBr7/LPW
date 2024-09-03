<?php
//Configuração para mostrar os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("conexao.php");

$conn = Conexao::getConexao();
print_r($conn);

//verifica se o usuario ja clicou no gravar
if (isset($_POST['titulo'])) {
    //echo "heeey! Usuário já clicou no gravar!";
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $qtdPaginas = $_POST['qtdpaginas'];
    //echo $titulo .  " - " . $genero . " - " . $qtdPaginas;

    // Inserindo o livro no banco de dados
    $sql = "INSERT INTO livros(titulo, genero, qtd_paginas)
            VALUES (? , ? , ?)";
    $stm = $conn->prepare($sql);
    $stm->execute([$titulo, $genero, $qtdPaginas]);
    // os parametros traz mais segurança pro código.

    //REDICERIOnar para a página desejada
    header("Location: livros.php");
    //exit; // Evita que a página seja carregada novamente após o redirecionamento
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>

</head>

<body>
    </table>


    <form method="POST">

        <input type="text" name="titulo"
            placeholder="Informe o título" />

        <br><br>

        <select name="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="A">Aventura</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outro</option>
        </select>

        <br><br>

        <input type="number" name="qtdpaginas"
            placeholder="Informe a quantidade de páginas" />

        <br><br>

        <input type="submit" value="Gravar" />
        <input type="reset" value="Limpar" />
    </form>

    <h3>Listagem dos livros</h3>
    <?php
    // Consulta para selecionar todos os livros
    $sql = "SELECT * FROM livros";
    $stm = $conn->prepare($sql);
    $stm->execute();
    $livros = $stm->fetchALL();
    ?>
    <php?
        <h3>Formulário do livro</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Gênero</th>
                <th>Páginas</th>
                <th></th>
            </tr>

            <?php foreach ($livros as $l): ?>
                <tr>
                    <td><?php echo $l['id'] ?></td>
                    <td><?php echo $l['titulo'] ?></td>
                    <td><?php echo $l['genero'] ?></td>
                    <td><?php echo $l['qtd_paginas'] ?></td>
                    <td>
                        <a href="livros_del.php?id=<?php echo $l['id'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>


</body>

</html>