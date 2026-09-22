<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2B
Componentes:
        26007792-2 - Alysson Gonsalves Campos Pardo
        26005861-2 - Giulia Quignalia Gonçalves
        26011325-2 - João Batista da Silva de Sousa Filho
        26008404-2 - Klisman Gabriel Bourscheidt
        26006072-2 - Matheus da Fonseca Marques Rosa
        26011849-2 - Michel luis Ramos Junior 
        26012409-2 - Rozilda Aparecida Domingues
Data: 23 de Setembro de 2026
Descritivo: Escreva um programa para calcular o imposto de renda anual de um contribuinte. O
programa deve ler: CPF, Nome, Rendimento Anual, Imposto Retido na Fonte, Contribuição
Previdenciária, Despesas Médicas e Número de Dependentes.

*******************************************************************************/
?>

<?php

// Entrada de dados
echo "Digite o CPF: ";
$cpf = trim(fgets(STDIN));

echo "Digite o Nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o Rendimento Anual: R$ ";
$rendimentoAnual = floatval(fgets(STDIN));

echo "Digite o Imposto Retido na Fonte: R$ ";
$impostoRetido = floatval(fgets(STDIN));

echo "Digite a Contribuição Previdenciária: R$ ";
$contribuicaoPrevidenciaria = floatval(fgets(STDIN));

echo "Digite as Despesas Médicas: R$ ";
$despesasMedicas = floatval(fgets(STDIN));

echo "Digite o Número de Dependentes: ";
$numeroDependentes = intval(fgets(STDIN));


// Cálculo da dedução por dependentes
$deducaoDependentes = $numeroDependentes * 1080.00;

// Cálculo do total das deduções
$totalDeducoes = $contribuicaoPrevidenciaria
               + $despesasMedicas
               + $deducaoDependentes;

// Cálculo da base de cálculo
$baseCalculo = $rendimentoAnual - $totalDeducoes;

// Evita uma base de cálculo negativa
if ($baseCalculo < 0) {
    $baseCalculo = 0;
}


// Cálculo do imposto devido
if ($baseCalculo <= 10800.00) {

    $aliquota = 0;
    $parcelaDeduzir = 0;

} elseif ($baseCalculo <= 21600.00) {

    $aliquota = 0.15;
    $parcelaDeduzir = 1620.00;

} else {

    $aliquota = 0.25;
    $parcelaDeduzir = 3780.00;
}

$impostoDevido = ($baseCalculo * $aliquota) - $parcelaDeduzir;


// Diferença entre imposto devido e imposto retido
$diferenca = $impostoDevido - $impostoRetido;


// Exibição dos resultados
echo "\n========== RESULTADO ==========\n";
echo "CPF: $cpf\n";
echo "Nome: $nome\n";
echo "Rendimento Anual: R$ " . number_format($rendimentoAnual, 2, ',', '.') . "\n";
echo "Total das Deduções: R$ " . number_format($totalDeducoes, 2, ',', '.') . "\n";
echo "Base de Cálculo: R$ " . number_format($baseCalculo, 2, ',', '.') . "\n";
echo "Imposto Devido: R$ " . number_format($impostoDevido, 2, ',', '.') . "\n";

if ($diferenca > 0) {

    echo "Imposto a PAGAR: R$ " .
         number_format($diferenca, 2, ',', '.') . "\n";

} elseif ($diferenca < 0) {

    echo "Imposto a RESTITUIR: R$ " .
         number_format(abs($diferenca), 2, ',', '.') . "\n";

} else {

    echo "Não há imposto a pagar nem a restituir.\n";
}

/*
Esse código faz a soma de dois números inteiros digitados pelo usuário:

Resumido: o programa lê dois números, soma os dois e mostra o resultado.
*/
?>

