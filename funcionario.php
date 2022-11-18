<?php 
include 'conecta.php';

//cria a consulta sql
$consultaSql = "SELECT * FROM funcionario order by nome, cpf asc";

// trazer a lista completa dos dados
$lista = $pdo->query($consultaSql);

// separar os dados em linhas 

$row = $lista->fetch();
// $linha = $lista->fetch();
// $num_linhas = $lista->rowCount();

//retornando o numero de linhas 

$num_rows = $lista->rowCount();

if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $escala = $_POST['escala'];
    $turno = $_POST['turno'];
    $admissao = $_POST['admissao'];
    $demissao = $_POST['demissao'];
    $salario = $_POST['salario'];
    $vt = $_POST['vt'];
    $vr = $_POST['vr'];
    $va = $_POST['va'];

    $consulta = "insert funcionario (nome, cpf, cargo, escala, turno, admissao, demissao, salario, vt, vr, va) values ('$nome','$cpf','$cargo','$escala','$turno',$admissao','$demissao','$salario','$vt','$vr','$va')";
    $resultado = $pdo->query($consulta);
    $_POST['enviar'] = null;
    header('location: funcionario.php');
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios <?php echo '('.$num_rows.')'?></title>
</head>
<body>
    <section class="formulario">
        <form action="#" method="post">
            <div hidden>
                <label for="cod-funcionario">
                    Código
                    <input type="text" name="cod-funcionario">
                </label>
            </div>
            <div>
                <label for="nome">
                    Nome 
                    <input type="text" name="nome" required>
                </label>
            </div>
            <div>
                <label for="cpf">
                    CPF 
                    <input type="number" name="cpf" required>
                </label>
            </div>
            <div>
                <label for="cargo">
                    Cargo
                    <input type="text" name="cargo" required>
                </label>
            </div>
            <div>
                <label for="escala">
                    Escala
                    <input type="text" name="escala" required>
                </label>
            </div>
            <div>
                <label for="turno">
                    Turno
                    <input type="text" name="turno" required>
                </label>
            </div>
            <div>
                <label for="admissao">
                    Admissão
                    <input type="text" name="admissao" required>
                </label>
            </div>
            <div>
                <label for="demissao">
                    Demissão
                    <input type="text" name="demissao">
                </label>
            </div>
            <div>
                <label for="salario">
                    Salario
                    <input type="text" name="salario" required>
                </label>
            </div>
            <div>
                <label for="vt">
                    Vale Transporte
                    <input type="text" name="vt">
                </label>
            </div>
            <div>
                <label for="vr">
                    Vale Refeição  
                    <input type="text" name="vr">
                </label>
            </div>
            <div>
                <label for="va">
                    Vale Alimentação 
                    <input type="text" name="va">
                </label>
            </div>
            <div>
                <button type="submit" name="enviar" id="btn-enviar">Enviar</button>
            </div>
        </form>
    </section>
    <table>
        <thead>
            <th hidden>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Escala</th>
            <th>Turno</th>
            <th>Admissão</th>
            <th>Demissão</th>
            <th>Salario</th>
            <th>Vale Transporte</th>
            <th>Vale Refeição</th>
            <th>Vale Alimentação</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td hidden><?php echo $row['cod_func'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php echo $row['cpf'];?></td>
                    <td><?php echo $row['cargo'];?></td>
                    <td><?php echo $row['escala'];?></td>
                    <td><?php echo $row['turno'];?></td>
                    <td><?php echo $row['admissao'];?></td>
                    <td><?php echo $row['demissao'];?></td>
                    <td><?php echo $row['salario'];?></td>
                    <td><?php echo $row['vt'];?></td>
                    <td><?php echo $row['vr'];?></td>
                    <td><?php echo $row['va'];?></td>
                </tr>
            <?php }while($row = $lista->fetch());?>
        </tbody>
    </table>
</body>
</html>