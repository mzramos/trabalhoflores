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
Descritivo:Escreva um programa que leia o ano de nascimento de uma pessoa e o ano atual.
Verifique se o ano de nascimento é um ano válido (maior que 1900 e menor ou igual ao ano
atual) e exiba a idade calculada.
*******************************************************************************/
?>

<?php

echo "Digite o ano de nascimento: ";
$anoNascimento = intval(fgets(STDIN));

echo "Digite o ano atual: ";
$anoAtual = intval(fgets(STDIN));

// Verifica se o ano de nascimento é válido
if ($anoNascimento > 1900 && $anoNascimento <= $anoAtual) {

    $idade = $anoAtual - $anoNascimento;

    echo "Ano de nascimento válido.\n";
    echo "Idade: $idade anos.\n";

} else {

    echo "Ano de nascimento inválido.\n";
}

/*
Esse código verifica se o ano de nascimento é valido e calcula a idade da pessoa.

Resumindo:o programa lê o ano de nascimento eo ano atual, verifica se o ano é válido e mostra a idade
*/
?>

