<?php

include_once("conexao.php");


$sql = "SELECT planilhas.classificacao, planilhas.produto, SUM(planilhas.quantidade) AS quantidade
FROM planilhas
GROUP BY planilhas.classificacao, planilhas.produto";

$listagem = mysqli_query($conn, $sql);

$results = mysqli_query($conn, $sql);
echo "<table>"; //begin table tag...
//you can add thead tag here if you want your table to have column headers
while ($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['classificacao'] . "</td>";
    echo "<td>" . $rowitem['produto'] . "</td>";
    echo "<td>" . $rowitem['quantidade'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// $sql = "SELECT `name`,`date`,`present`,`website` FROM `dates`";
