<?php
class Funcionario
{
    private $nome;
    private $salario;
    private $totalHoras;
    private $valorHora;
    private $bonus;
    private $tipo;



    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setTotalHoras($totalHoras)
    {
        $this->totalHoras = $totalHoras;
    }
    public function getTotalHoras()
    {
        return $this->totalHoras;
    }
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;
    }
    public function getValorHora()
    {
        return $this->valorHora;
    }
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }
    public function getBonus()
    {
        return $this->bonus;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function calcularSalario()
    {
        if ($this->tipo == 'horista') {
            $this->salario = $this->totalHoras * $this->valorHora;


        } else {
            $this->salario = ($this->salario * ($this->bonus / 100)) + $this->salario;
        }
    }
    
    public function info()
    {
        echo "Nome: " . $this->nome . "<br>salario: " . $this->salario;


    }




}





?>