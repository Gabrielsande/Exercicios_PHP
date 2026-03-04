<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            /* Para conter o box-shadow */
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .exercicio:last-child {
            border-bottom: none;
        }

        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #004a99;
        }

        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }

        ul,
        ol {
            padding-left: 20px;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>

        <?php

        // Exercício Exemplo: Quadrado de um número
        echo "<div class='exercicio'>";
        echo "<h3>Quadrado de um numero</h3>";
        $num1 = 15;
        $quad = pow($num1, 2);
        echo "<p>Valor: <code>$num1</code></p>";
        echo "<div class='resultado'>O quadrado do numero é: <strong>$quad</strong></div>";
        echo "</div>";


        /*Exercicio - 1*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 1</h3>";
        echo "<div class='resultado'>";


        $valor1 = 10;
        $valor2 = 10;

        $soma = $valor1 + $valor2;
        echo "a soma é $soma";
        echo "</div></div>";


        /*Exercicio - 2*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 2</h3>";
        echo "<div class='resultado'>";
        $nota1 = 10;
        $nota2 = 9;
        $nota3 = 8;

        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo " a media é $media";
        echo "</div></div>";

        /*Exercicio - 3*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 3</h3>";
        echo "<div class='resultado'>";
        $metro = 10;

        $centimetros = $metro / 1000;
        echo "a conversão de metros $metro para centimetros é $centimetros";
        echo "</div></div>";

        /*Exercicio - 4*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 4</h3>";
        echo "<div class='resultado'>";
        $base = 10;
        $altura = 5;

        $area = $base * $altura;
        echo "a área desse triangulo é $area";
        echo "</div></div>";

        /*Exercicio - 5*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 5: Positivo ou Negativo</h3>";
        echo "<div class='resultado'>";
        $num = 10;

        if ($num >= 1) {
            echo "O número $num é <strong>POSITIVO</strong>";
        } else {
            echo "O número $num é <strong>NEGATIVO</strong>";
        }
        echo "</div></div>";

        /*Exercicio - 6*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 6: Maioridade</h3>";
        echo "<div class='resultado'>";
        $idade = 18;

        if ($idade >= 18) {
            echo "Ele tem $idade, portanto é <strong>ADULTO</strong>";
        } else {
            echo "Ele tem $idade, portanto é <strong>MENOR DE IDADE</strong>";
        }
        echo "</div></div>";

        /*Exercicio - 7*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 7: Aprovação</h3>";
        echo "<div class='resultado'>";
        $media1 = 10;

        if ($media1 >= 6.0) {
            echo "<strong>APROVADO</strong>";
        } else {
            echo "<strong>REPROVADO</strong>";
        }
        echo "</div></div>";

        /*Exercicio - 8*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 8: Maior de Dois</h3>";
        echo "<div class='resultado'>";

        $numero1 = 15;
        $numero2 = 9;

        if ($numero1 > $numero2) {
            echo "<strong>O maior número é: $numero1</strong>";
        } else {
            echo "<strong>O maior número é: $numero2</strong>";
        }

        echo "</div></div>";


        /*Exercicio - 9*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 9: Dia da Semana</h3>";
        echo "<div class='resultado'>";

        $dia = 3;

        switch ($dia) {
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda-feira";
                break;
            case 3:
                echo "Terça-feira";
                break;
            case 4:
                echo "Quarta-feira";
                break;
            case 5:
                echo "Quinta-feira";
                break;
            case 6:
                echo "Sexta-feira";
                break;
            case 7:
                echo "Sábado";
                break;
            default:
                echo "Dia inválido!";
        }

        echo "</div></div>";

        /*Exercicio - 10*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 10: Vogal ou Consoante</h3>";
        echo "<div class='resultado'>";

        $letra = "A";
        $letra = strtolower($letra);

        switch ($letra) {
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                echo "<strong>É uma vogal</strong>";
                break;
            default:
                echo "<strong>É uma consoante</strong>";
        }

        echo "</div></div>";

        /*Exercicio - 11*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 11: Status do Pedido</h3>";
        echo "<div class='resultado'>";

        $status = "em_preparacao";

        switch ($status) {
            case "aguardando":
                echo "Seu pedido está aguardando confirmação.";
                break;
            case "em_preparacao":
                echo "Seu pedido está sendo preparado.";
                break;
            case "enviado":
                echo "Seu pedido já foi enviado!";
                break;
            case "concluido":
                echo "Pedido concluído com sucesso!";
                break;
            default:
                echo "Status desconhecido.";
        }

        echo "</div></div>";

        /*Exercicio - 12*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 12: Contagem 1-10</h3>";
        echo "<div class='resultado'>";

        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }

        echo "</div></div>";

        /*Exercicio - 13*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 13: Pares de 1-20</h3>";
        echo "<div class='resultado'>";

        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }

        echo "</div></div>";


        /*Exercicio - 14*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 14: Tabuada</h3>";
        echo "<div class='resultado'>";

        $numero = 7;

        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }

        echo "</div></div>";

        /*Exercicio - 15*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 15: Contagem Regressiva</h3>";
        echo "<div class='resultado'>";

        $contador = 10;

        while ($contador >= 1) {
            echo $contador . " ";
            $contador--;
        }

        echo "</div></div>";


        /*Exercicio - 16*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 16: Soma até 100</h3>";
        echo "<div class='resultado'>";

        $numero = 1;
        $soma = 0;

        while ($numero <= 100) {
            $soma += $numero;
            $numero++;
        }

        echo "A soma de 1 até 100 é: <strong>$soma</strong>";

        echo "</div></div>";

        /*Exercicio - 17*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 17: Sorteio simples</h3>";
        echo "<div class='resultado'>";

        $tentativas = 0;

        do {
            $numero = rand(1, 10);
            $tentativas++;
        } while ($numero != 5);

        echo "Número 5 sorteado!<br>";
        echo "Tentativas necessárias: <strong>$tentativas</strong>";

        echo "</div></div>";

        /*Exercicio - 18*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 18: Lista de Frutas</h3>";
        echo "<div class='resultado'>";

        $frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];

        echo "<ul>";
        foreach ($frutas as $fruta) {
            echo "<li>$fruta</li>";
        }
        echo "</ul>";

        echo "</div></div>";

        /*Exercicio - 19*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 19: Soma de Array</h3>";
        echo "<div class='resultado'>";

        $numeros = [10, 20, 30, 40, 50];
        $soma = 0;

        foreach ($numeros as $num) {
            $soma += $num;
        }

        echo "Soma total: <strong>$soma</strong>";

        echo "</div></div>";

        /*Exercicio - 20*/
        /*********************************************************************************************/
        echo "<div class='exercicio'><h3>Exercicio - 20: Array Associativo</h3>";
        echo "<div class='resultado'>";

        $aluno = [
            "nome" => "Gabriel",
            "idade" => 18,
            "curso" => "Técnico em Informática"
        ];

        echo "Nome: " . $aluno["nome"] . "<br>";
        echo "Idade: " . $aluno["idade"] . "<br>";
        echo "Curso: " . $aluno["curso"];

        echo "</div></div>";

        ?>
    </div>
</body>

</html>