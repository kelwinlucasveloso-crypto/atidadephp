<?php
$aprovados = 0;
$alunos = [
    (object)["jenny", "nota" => 70],
    (object)["kelwin", "nota" => 50],
    (object)["julia", "nota" => 100],
    (object)["Rafeal", "nota" => 60],
];
foreach($alunos as $alunos )  {
    if ($alunos -> nota >=80) {

    $aprovados ++;
    }
}
echo "total de aprovados: $aprovados";