<html>
 <head>
  <title>Desafio PHP</title>
 </head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <body style="background:#19a3b5; color:white">
 <div class="container-sm">
  <form action="" method="get">
  <h4 class="title text-center mt-4 mb-5">Número Primos</h4>
  Digite um numero primo de 2 até :
  <input type="number" name="num" /><br />
  <input class="btn btn-success" type="submit" name="submit" value="Enviar" />
 </form>
 <?php
function primos($num_verif){
    $j = 2;
    while ($j <= $num_verif){
        $i = 2;
        $primo = 1;
        while($i < $j){
            if ($j % $i == 0){
                $primo = 0;
                break;
            }
            $i ++;
        }
        if($primo){
            echo $j . '<br>';
        }
        $j++;
    }
}
$num = $_GET ['num'];
primos($num);
  
 ?>
</div> 
 </body>
</html>


  
  