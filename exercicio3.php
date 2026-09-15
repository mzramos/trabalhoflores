<?php

            $dia = 7;
            $mensagem = "";

            switch ($dia) {
                case 1:
                    $mensagem = "Domingo";
                    $mensagem1 = "Fim de Semana";
                    break;
                case 2:
                    $mensagem = "Segunda-feira";
                    $mensagem1 = "Dia útil";
                    break;
                case 3:
                    $mensagem = "Terça-feira";
                    $mensagem1 = "Dia útil";
                    break;
                case 4:
                    $mensagem = "Quarta-feira";
                    $mensagem1 = "Dia útil";
                    break;
                case 5:
                    $mensagem = "Quinta-feira";
                    $mensagem1 = "Dia útil";
                    break;
                case 6:
                    $mensagem = "sexta-feira";
                    $mensagem1 = "Dia útil";
                    break;
                case 7:
                    $mensagem = "Sabado";
                    $mensagem1 = "Fim de Semana";
                    break;
                default:
                    $mensagem1 = "Dia inválido";
                   
            }

            echo "<p>". $mensagem. ' - '. $mensagem1."</p>"; // Saída: Terça-feira
        ?>
