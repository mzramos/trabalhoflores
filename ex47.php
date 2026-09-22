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
Descritivo:Escreva um programa que leia dois nomes e os exiba na tela em ordem alfabética.
*******************************************************************************/
?>

<?php

echo "Digite o primeiro nome: ";
$nome1 = trim(fgets(STDIN));

echo "Digite o segundo nome: ";
$nome2 = trim(fgets(STDIN));

if (strcmp(strtolower($nome1), strtolower($nome2)) <= 0) {
    echo "$nome1\n";
    echo "$nome2\n";
} else {
    echo "$nome2\n";
    echo "$nome1\n";
}

/*
Esse código lê dois nomes e coloca os nomes em ordem alfabética:

Resumindo: o programa lê dois nomes, compara os dois e mostra primeiro o que vem antes na ordem alfabética
*/
?>
