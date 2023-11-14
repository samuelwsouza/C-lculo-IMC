<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    function calcularFaixaIMC($imc) {

        // $imc = $_POST["imc"];

        $faixasIMC = array(
            "Magreza" => 18.5,
            "Saudável" => 24.9,
            "Sobrepeso" => 29.9,
            "Obesidade Grau I" => 34.9,
            "Obesidade Grau II" => 39.9,
            "Obesidade Grau III" => PHP_FLOAT_MAX 
        );

        foreach ($faixasIMC as $classificacao => $limite) {
            if ($imc <= $limite) {
                echo "Atenção, seu IMC é $imc, e você está classificado como $classificacao";
                return;
            }
        }

        echo "Categoria não encontrada";
    }

    $imcInformado = 31.3; // Resultado estático conforme apresentado
    calcularFaixaIMC($imcInformado);

}
?>