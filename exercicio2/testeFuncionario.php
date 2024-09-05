   <?php

   include 'Funcionario.php';


   $nome = $_GET['nome'];
   $bonus = $_GET['bonus'];
   $valorHora = $_GET['valorHora'];
   $totalHoras = $_GET['totalHoras'];
   $salario = $_GET['salario'];
   $tipo = $_GET['tipo'];

$f1 = new Funcionario();
$f1->setNome($nome);
$f1->setBonus($bonus);
$f1->setValorHora($valorHora);
$f1->setTotalHoras($totalHoras);
$f1->setSalario($salario);
$f1->setTipo ($tipo);

   //var_dump($f1);

   $f1->calcularSalario();
   $f1->info();







?>