<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanilhaController extends Controller
{

    public function listagem()
    {
        //
        $sql = "SELECT planilhas.classificacao, planilhas.produto, FORMAT(SUM(planilhas.quantidade),0) AS quantidade
                FROM planilhas
                GROUP BY planilhas.classificacao, planilhas.produto";

        $vendas = DB::select($sql);

        $dados = [
            'vendas' => $vendas
        ];

        return view('list', $dados);
    }


    public function processador()
    {

        $sql = "TRUNCATE planilhas";
        // $resultado = DB::table('TRUNCATE planilhas');
        $resultado = DB::statement('TRUNCATE planilhas');



        if (!empty($_FILES['arquivo1']['tmp_name'])) {
            $arquivo = new \DomDocument();
            $arquivo->load($_FILES['arquivo1']['tmp_name']);
            $momento = $arquivo->getElementsByTagName("LastSaved")->item(0)->nodeValue;
            $linhas = $arquivo->getElementsByTagName("Row");

            die($linhas);

            foreach ($linhas as $linha) {

                $produto =  $linha->getElementsByTagName("Data")->item(0)->nodeValue;
                $quantidade =  $linha->getElementsByTagName("Data")->item(1)->nodeValue;
                $venda =  $linha->getElementsByTagName("Data")->item(2)->nodeValue;
                $custo =  $linha->getElementsByTagName("Data")->item(3)->nodeValue;
                $margem =  $linha->getElementsByTagName("Data")->item(4)->nodeValue;
                $margemp =  $linha->getElementsByTagName("Data")->item(5)->nodeValue;


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

                        $parametros = [
                            'momento' => $momento,
                            'classificacao' => $classificacao,
                            'produto' => $produto,
                            'quantidade' => $quantidade,
                            'venda' => $venda,
                            'custo' => $custo,
                            'margem' => $margem,
                            'margemp' => $margemp
                        ];

                        DB::insert('insert into planilhas (momento, classificacao,produto,quantidade,venda,custo,margem,margemp) values (:momento, :classificacao,:produto,:quantidade,:venda,:custo,:margem,:margemp)', $parametros);
                    }
                }
            }
        }
    }
}
