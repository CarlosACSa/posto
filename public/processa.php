<?php


use App\Models\Planilha;
use Illuminate\Routing\Route;

include_once("conexao.php");

$sql = "TRUNCATE planilhas";
$resultado = mysqli_query($conn, $sql);

if (!empty($_FILES['arquivo1']['tmp_name'])) {
    $arquivo = new DomDocument();
    $arquivo->load($_FILES['arquivo1']['tmp_name']);
    $momento = $arquivo->getElementsByTagName("LastSaved")->item(0)->nodeValue;
    $linhas = $arquivo->getElementsByTagName("Row");
    foreach ($linhas as $linha) {
        $produto = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
        $quantidade = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
        $venda = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
        $custo = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
        $margem = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
        $margemp = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
        if ($produto != '') {
            if ($quantidade == '') {
                $vetor = explode("Classificação produto:", $produto);
                $classificacao = trim($vetor[1]);
            }
            if ($margemp != '') {
                echo "Momento: $momento <br>";
                echo "Classificação: $classificacao <br>";
                echo "Produto: $produto <br>";
                echo "Quantidade: $quantidade <br>";
                echo "Venda: $venda <br>";
                echo "Custo: $custo <br>";
                echo "Margem: $margem <br>";
                echo "Margem %: $margemp <br>";
                echo "<hr>";
                $sql = "INSERT INTO planilhas (momento, classificacao,produto,quantidade,venda,custo,margem,margemp)
                VALUES ('$momento', '$classificacao','$produto','$quantidade','$venda','$custo','$margem','$margemp')";
                $resultado = mysqli_query($conn, $sql);
            }
        }
    }
}

if (!empty($_FILES['arquivo2']['tmp_name'])) {
    $arquivo = new DomDocument();
    $arquivo->load($_FILES['arquivo2']['tmp_name']);
    $momento = $arquivo->getElementsByTagName("LastSaved")->item(0)->nodeValue;
    $linhas = $arquivo->getElementsByTagName("Row");
    foreach ($linhas as $linha) {
        $produto = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
        $quantidade = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
        $venda = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
        $custo = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
        $margem = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
        $margemp = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
        if ($produto != '') {
            if ($quantidade == '') {
                $vetor = explode("Classificação produto:", $produto);
                $classificacao = trim($vetor[1]);
            }
            if ($margemp != '') {
                echo "Momento: $momento <br>";
                echo "Classificação: $classificacao <br>";
                echo "Produto: $produto <br>";
                echo "Quantidade: $quantidade <br>";
                echo "Venda: $venda <br>";
                echo "Custo: $custo <br>";
                echo "Margem: $margem <br>";
                echo "Margem %: $margemp <br>";
                echo "<hr>";
                $sql = "INSERT INTO planilhas (momento, classificacao,produto,quantidade,venda,custo,margem,margemp)
                VALUES ('$momento', '$classificacao','$produto','$quantidade','$venda','$custo','$margem','$margemp')";
                $resultado = mysqli_query($conn, $sql);
            }
        }
    }
}

if (!empty($_FILES['arquivo3']['tmp_name'])) {
    $arquivo = new DomDocument();
    $arquivo->load($_FILES['arquivo3']['tmp_name']);
    $momento = $arquivo->getElementsByTagName("LastSaved")->item(0)->nodeValue;
    $linhas = $arquivo->getElementsByTagName("Row");
    foreach ($linhas as $linha) {
        $produto = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
        $quantidade = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
        $venda = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
        $custo = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
        $margem = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
        $margemp = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
        if ($produto != '') {
            if ($quantidade == '') {
                $vetor = explode("Classificação produto:", $produto);
                $classificacao = trim($vetor[1]);
            }
            if ($margemp != '') {
                echo "Momento: $momento <br>";
                echo "Classificação: $classificacao <br>";
                echo "Produto: $produto <br>";
                echo "Quantidade: $quantidade <br>";
                echo "Venda: $venda <br>";
                echo "Custo: $custo <br>";
                echo "Margem: $margem <br>";
                echo "Margem %: $margemp <br>";
                echo "<hr>";
                $sql = "INSERT INTO planilhas (momento, classificacao,produto,quantidade,venda,custo,margem,margemp)
                VALUES ('$momento', '$classificacao','$produto','$quantidade','$venda','$custo','$margem','$margemp')";
                $resultado = mysqli_query($conn, $sql);
            }
        }
    }
}
