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

