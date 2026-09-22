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
Descritivo:Escreva um programa que leia separadamente o dia, o mês e o ano de uma data e
informe se ela é uma data válida ou não. Considere a ocorrência de anos bissextos.
*******************************************************************************/
?>

<?php

echo "Digite o dia: ";
$dia = intval(fgets(STDIN));

echo "Digite o mês: ";
$mes = intval(fgets(STDIN));

echo "Digite o ano: ";
$ano = intval(fgets(STDIN));

$dataValida = true;

// Verifica se o ano é válido
if ($ano <= 0) {
    $dataValida = false;
}

// Verifica se o mês está entre 1 e 12
if ($mes < 1 || $mes > 12) {
    $dataValida = false;
}

// Define a quantidade de dias do mês
if ($mes == 2) {

    // Verifica se o ano é bissexto
    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        $diasNoMes = 29;
    } else {
        $diasNoMes = 28;
    }

} elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {

    $diasNoMes = 30;

} else {

    $diasNoMes = 31;
}

// Verifica se o dia é válido
if ($dia < 1 || $dia > $diasNoMes) {
    $dataValida = false;
}

// Exibe o resultado
if ($dataValida) {
    echo "A data $dia/$mes/$ano é válida.\n";
} else {
    echo "A data $dia/$mes/$ano é inválida.\n";
}

/*
Esse código verifica se uma data é válida: 

Resumindo: o programa lê o dia, mês e ano, verifica quantos dias o mês possui e informa se a data é válida ou inválida
*/
?>
