<?php
// Função para calcular o montante (valor da parcela) com juros compostos
function calcularMontante($C, $i, $t) {
    return $C * pow((1 + $i), $t);
}

// Valor do financiamento da moto
$C = 10000; // Altere para o valor desejado

// Taxa de juros inicial (2%) e aumento por parcela (0,3%)
$taxaInicial = 0.02;
$aumentoTaxa = 0.003;

// Número de parcelas
$parcelas = [24, 36, 48, 60];

foreach ($parcelas as $numParcelas) {
    // Calcula a taxa de juros mensal para essa opção de parcelamento
    $taxaJurosMensal = $taxaInicial + ($aumentoTaxa * ($numParcelas - 24));

    // Calcula o valor da parcela usando a função calcularMontante
    $montante = calcularMontante($C, $taxaJurosMensal, $numParcelas);
    $valorParcela = $montante / $numParcelas;

    echo "Para {$numParcelas} parcelas, o valor da parcela é de R$ " . number_format($valorParcela, 2) . "<br>";
}
?>
