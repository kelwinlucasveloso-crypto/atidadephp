<?php

$aprovados = 0;
$reprovados = 0;

$candidatos = [
    (object)["jenny", "nota" => 70],
    (object)["kelwin", "nota" => 50],
    (object)["julia", "nota" => 100],
    (object)["Rafeal", "nota" => 60],
    (object)["lucas", "nota" => 90],
];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >= 80) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}

echo "Aprovados: " . $aprovados . "<br>" ;
echo "Reprovados: " . $reprovados;

