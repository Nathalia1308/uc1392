<?php 

include 'conecta.php';

// cria a consulta sql
$consultaSql = "select * from filme order by titulo asc";

// trazer a lista completa dos dados 
$lista = $pdo->query("$consultaSql");

// separar os dados em linhas

// $linha = $lista->fetch();

$row = $lista->fetch();

// retornando o número de linhas

// $num_linhas = $lista->rowCount();

$num_rows = $lista->rowCount();

if(isset($_POST['enviar'])){
    $titulo = $_POST['titulo'];
    $sinopse = $_POST['sinopse'];
    $lancamento = $_POST['lancamento'];

    $consulta = "inset filme (titulo, sinopse, lancamento) values ('$titulo','$sinopse','$lancamento')";
    $resultado = $pdo->query($)
}





// echo 'A consulta retornou <stong>'.$num_linhas. ' </strong> Filmes <br>';

// do{
//     echo $linha['titulo'].' - '.$linha['lancamento'].'<br>';
// }while($linha = $lista -> fetch());

//print_r($linha);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes <?php echo '(' .$num_linhas.')' ?></title>
    <style>
    /* td{
        border-bottom: 1px solid black; 
    }</style> */
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Sinopse</th>
            <th>Lançamento</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td><?php echo $linha['cod_filme'];?></td>
                    <td><?php echo $linha['titulo'];?></td>
                    <td><?php echo $linha['sinopse'];?></td>
                    <td><?php echo $linha['lancamento'];?></td>
                </tr>
            <?php }while($linha = $lista->fetch());?>
        </tbody>
    </table>
</body>
</html>