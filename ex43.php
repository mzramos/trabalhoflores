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
Descritivo:Escreva um programa que leia um número inteiro de 3 casas decimais (100 a 999) e
informe se o algarismo da casa das centenas é par ou ímpar.
*******************************************************************************/
?>

<?php

echo "Digite um número inteiro de 3 algarismos (100 a 999): ";
$num = intval(fgets(STDIN));

// Obtém o algarismo das centenas
$centena = intdiv($num, 100);

if ($centena % 2 == 0) {
    echo "O algarismo das centenas é PAR.\n";
} else {
    echo "O algarismo das centenas é ÍMPAR.\n";
}

/*
Esse código verifica se o algorismo das centenas de um número de 3 algorismos e par ou ímpar:

Resumindo: o prgrama lê um número de 3 algorismos, pega o algorismo das centenas e informa se ele é par ou ímpar
*/
?>