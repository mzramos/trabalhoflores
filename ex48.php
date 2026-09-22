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
Descritivo:Escreva um programa que leia três números reais e exiba o maior deles.
*******************************************************************************/
?>

<?php

echo "Digite o primeiro número: ";
$num1 = floatval(fgets(STDIN));

echo "Digite o segundo número: ";
$num2 = floatval(fgets(STDIN));

echo "Digite o terceiro número: ";
$num3 = floatval(fgets(STDIN));

if ($num1 >= $num2 && $num1 >= $num3) {
    $maior = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $maior = $num2;
} else {
    $maior = $num3;
}

echo "O maior número é: $maior\n";

/*
Esse código verifica qual é o maior número entre 3 números:

Resumindo: o programa lê 3 números, compara os valores e mostra o maior deles
*/
?>
