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
Descritivo:Escreva um programa que leia a sigla do estado onde uma pessoa nasceu e informe se
ela é carioca, paulista, mineira ou de outro estado (outros).
*******************************************************************************/
?>

```php
<?php

echo "Digite a sigla do estado onde nasceu: ";
$estado = strtoupper(trim(fgets(STDIN)));

switch ($estado) {

    case "RJ":
        echo "A pessoa é carioca.\n";
        break;

    case "SP":
        echo "A pessoa é paulista.\n";
        break;

    case "MG":
        echo "A pessoa é mineira.\n";
        break;

    default:
        echo "A pessoa é de outro estado.\n";
        break;
}

/*
Esse código identifica o estado de uma pessoa pela sigla informada:

Resumindo: o programa lê a sigla do estado e informa se a pessoa é carioca,paulista, mineiro ou de outro estado
*/

?>
