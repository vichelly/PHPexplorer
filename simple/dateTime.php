<?php
function diaDaSemana($dataTexto) {
    $data = date('d/m/Y', strtotime($dataTexto));
    echo $data.' - ';
    $day = date('l', strtotime($dataTexto));
    switch ($day) {
        case 'Sunday':
            echo "Domingo";
            break;
        case 'Monday':
            echo "Segunda-Feira";
            break;
        case 'Tuesday':
            echo "Terça-Feira";
            break;
        case 'Wednesday':
            echo "Quarta-Feira";
            break;
        case 'Thursday':
            echo "Quinta-Feira";
            break;
        case 'Friday':
            echo "Sexta-Feira";
            break;
        case 'Saturday':
            echo "Sábado";
            break;
        default:
            echo "Data inválida";
            break;
    }
}

$dataParametro = '2023-02-01';

diaDaSemana($dataParametro);