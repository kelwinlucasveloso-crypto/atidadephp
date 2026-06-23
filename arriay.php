<?php
$aprovados = 0;
$cadidatos = [
    (object)["Rafeal", "nota" => 80],
    (object)["kelwin", "nota" => 50],
    (object)["joao gabriel", "nota" => 100],
    (object)["lucas", "nota" => 70],
];
foreach($cadidatos as $cadidatos )  {
    if ($cadidatos -> nota >=70) {

    $aprovados ++;
    }
}
echo "total de aprovados: $aprovados";