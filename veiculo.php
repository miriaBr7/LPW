//veiculo.php
<?php
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $combust = $_POST["combustivel"];
    $veiculo = new Veiculo($modelo, $marca, $combust);
class Veiculo {
    private $modelo;
    private $marca;
    private $combustivel;

    public function __construct($modelo, $marca, $combustivel) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->combustivel = $combustivel;
    }


    public function getModelo() {
        return $this->modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getCombustivel() {
        switch ($this->combustivel) {
            case 'A':
                return 'Álcool';
            case 'G':
                return 'Gasolina';
            case 'F':
                return 'Flex';
            default:
                return 'Desconhecido';
        }
    }
}


// Exiba os dados do veículo

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $veiculo->getModelo() . "<br>";
echo "Marca: " . $veiculo->getMarca() . "<br>";
echo "Combustível: " . $veiculo->getCombustivel() . "<br>";
echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";


///////////////////////////////////////veiculo_exec.php


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veiculo</title>
</head>

<body>
    <h2>Dados do Veículo</h2>
    <form method="POST" action="veiculo_exec.php">
        <input name="modelo" placeholder="Informe o modelo" />
        <br><br>
        <input name="marca" placeholder="Informe a marca" />
        <br><br>
        <select name="combustivel">
            <option value="">--Selecione o combustível---</option>
            <option value="A">Álcool</option>
            <option value="G">Gasolina</option>
            <option value="F">Flex</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php

