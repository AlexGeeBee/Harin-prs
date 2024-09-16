<?php

$str = "";
$m = 5;
switch($m) {
    case 1:
        $str = $str . "Январь <br>";
        $days = 31;
        break;
    case 2:
        $str = $str . "Февраль <br>";
        $days = 28;
        break;
    case 3:
        $str = $str . "Март <br>";
        $days = 31;
        break;
    case 4:
        $str = $str . "Апрель <br>";
        $days = 30;
        break;
    case 5:
        $str = $str . "Май <br>";
        $days = 31;
        break;
    case 6:
        $str = $str . "Июнь <br>";
        $days = 30;
        break;
    case 7:
        $str = $str . "Июль <br>";
        $days = 31;
        break;
    case 8:
        $str = $str . "Август <br>";
        $days = 31;
        break;
    case 9:
        $str = $str . "Сентябрь <br>";
        $days = 30;
        break;
    case 10:
        $str = $str . "Октябрь <br>";
        $days = 31;
        break;
    case 11:
        $str = $str . "Ноябрь <br>";
        $days = 30;
        break;
    case 12:
        $str = $str . "Декабрь <br>";
        $days = 31;
        break;
    default:
        $str = "Нет такого месяца";
}

if (isset($days)) {
    $str = $str . "пн вт ср чт пт сб вс<br>";
    for ($day = 0; $day < $days; $day++) {
        if ($day < 9) {
            $str = $str . "0";
        }

        $str .= "$day " + 1 . " ";
        
        if ((($day + 1) % 7) == 0) {
            $str = $str . "<br>";
        }
    }
}
echo $str;
?>