<?php 
    include ('config.php');
    include ('funcoes.php');

    $parcelas = array();
    $coeficiente = 0.0;

    if(isset($_POST['calcular'])){
        $capital = $_POST['capital'];
        $taxa = $_POST['taxa'];
        $parcela = $_POST['parcela'];
        $coeficiente = parcelar(floatval($taxa), intval($parcela));

        $data = date('d/m/Y');
        $dias = 30;

        for($i=0; $i < $parcela; $i++){
            $parcelas = ([$i+1, '.ª' ($coeficiente*floatval($capital)), date($data,strtotime("+.$dias"))]);
        }
        
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
        <input type="text" name="capital" placeholder="Capital..."><br>
        <input type="text" name="taxa" placeholder="Taxa (%)..."><br>
        <input type="text" name="parcela" placeholder="Parcelas (1)..."><br>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    <br><hr>
    <?php 
        if(count($parcelas)>0){
    ?>        
        <h3>Valor da parcela: R$ <?php  echo $parcelas[3];?></h3>
        <h3>Taxa de juros: </h3>
        <h3>Parcelas: </h3>
    <?php 
        }
    ?>
</body>
</html>