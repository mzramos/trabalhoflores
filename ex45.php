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
Descritivo: Escreva um programa que implemente uma calculadora básica. O programa deve obter
dois números reais do teclado e um operador caractere representando a operação
matemática desejada ('+', '-', '*' e '/'). Efetue o cálculo e exiba o resultado.
*******************************************************************************/
?>

<?php

echo "Digite o primeiro número: ";
$num1 = floatval(fgets(STDIN));

echo "Digite o segundo número: ";
$num2 = floatval(fgets(STDIN));

echo "Digite o operador (+, -, * ou /): ";
$operador = trim(fgets(STDIN));

switch ($operador) {

    case '+':
        $resultado = $num1 + $num2;
        echo "Resultado: $resultado\n";
        break;

    case '-':
        $resultado = $num1 - $num2;
        echo "Resultado: $resultado\n";
        break;

    case '*':
        $resultado = $num1 * $num2;
        echo "Resultado: $resultado\n";
        break;

    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "Resultado: $resultado\n";
        } else {
            echo "Não é possível dividir por zero.\n";
        }
        break;

    default:
        echo "Operador inválido.\n";
}

/*
Esse código faz operações matemáticas entre dois números:

Resumindo: o programa lê dois números e um operador, faz a operação escolhida e mostra o resultado
*/
?>