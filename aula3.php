<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <!-- <meta http-equiv="refresh" content="1"> -->
    </head>
</html>
<?php 
// "/* */"comentário de bloco
// "//" comentário de linha 
// "#" comentário de linha

// início - declaração de variáveis 
date_default_timezone_set('America/Sao_Paulo');
$nome ="Nathalia";
$data_nasc = date('2003/02/11');
echo($nome." - ".$data_nasc);
echo('<br>');
$hoje = date("D,d  M Y H:i:s");
echo(">>>>>>>>>>".$hoje);
echo('<br>');
/*$date = date_create('2000-01-01', timezone_open('America/Sao_Paulo'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";
echo('<br>');
date_timezone_set($date, timezone_open('Pacific/Chatham'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";
*/
$valor = 78.98;
$idade = 32;
$teste = true;
// final - declaração de variáveis

//declaração e uso matrizes
$alunos = array();
$alunos[0] = "Maria";
$alunos[1] = "João";
$nota = array(9,8,7,4);
print_r($nota);
echo('<br>');
$pontos = array('José' => '11','Lucas'=>'5', 'Jean'=>'9'); 
print_r($pontos);
echo('<br>');

//estrutura de decisão
if(!($idade>=30)){ // se verdadeiro então 
    echo("Aluno em lista para classificação");
}

$a = 1; $b= 9;
if($a > $b){
    echo("A variavel '$a' é maior '$b'" );
} elseif($a < $b){
    echo("O valor '$b' é menor '$a'");
} else{
    echo("O valor '$a' é igual '$b'");
}
    echo("<br>");
    $n = 5;
//estruturas de repetição

//uso a estrutura "while" quando não conheço limite 
while($a < 11){ //tabuada de um número
    echo($n. 'x '.$a. " = ".($a*$n)."<br>");
    $a = $a + 1;
}
echo("<br>");
for($i=1; $i < 11; $i++){
    echo($n.' x '.$i." = ".($i*$n)."<br>" );
}
echo("<br>");
$nota = array(9,8,7,4);

for ($i=0; $i < 4; $i++){
    echo($nota[$i]);
    echo("<br>");
}
?>

