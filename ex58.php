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
Descritivo:Escreva um programa que leia uma letra do teclado e informe se ela é uma vogal
maiúscula, uma vogal minúscula ou uma consoante.
*******************************************************************************/
?>

<?php

echo "Digite uma letra: ";
$letra = trim(fgets(STDIN));

if ($letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U') {
    echo "É uma vogal maiúscula.\n";

} elseif ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
    echo "É uma vogal minúscula.\n";

} else {
    echo "É uma consoante.\n";
}

/*
Esse código verifica se uma letra é maiúscula, minúscula ou consoante:

Resumindo: o programa lê uma letra e informa se ela é uma vogal maiúscula, minúscula ou uma consoante
*/
?>
