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
Descritivo:Escreva um programa que leia um número inteiro e informe se ele é divisível por 3 e por 7
simultaneamente.
*******************************************************************************/
?>

<?php

echo "Digite um número inteiro: ";
$num = intval(fgets(STDIN));

if ($num % 3 == 0 && $num % 7 == 0) {
    echo "O número é divisível por 3 e por 7 simultaneamente.\n";
} else {
    echo "O número não é divisível por 3 e por 7 simultaneamente.\n";
}

/*
Esse código verifica se um número inteiro é divisível por 3 e por 7 ao mesmo tempo:

Resumindo: o programa lêum número e informa se ele é divisível por 3 e por 7 simultaneamente
*/   
?> 
