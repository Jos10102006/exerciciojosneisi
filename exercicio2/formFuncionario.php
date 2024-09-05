<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
</head>
<body>
<form action="testeFuncionario.php" method="get">
    Nome: <input type="text" name="nome"><br>
    ValorHora: <input type="text" name="valorHora"><br>
    TotalHoras: <input type="text" name="totalHoras"><br>
    Bonus: <input type="text" name="bonus"><br>
    Salario: <input type="text" name="salario"><br>
    Tipo:<select name="tipo">
        <option value="assalariado">assalariado</option>
        <option value="horista">horista</option>
    </select>
    <input type="submit" value="cadastrar"><br>
    </form>
</body>
</html>