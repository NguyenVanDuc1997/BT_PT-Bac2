<?php
include 'QuadraticEquation.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Input a: <input type="text" name="a"><br><br>
    Input b: <input type="text" name="b"><br><br>
    Input c: <input type="text" name="c"><br><br>
    <input type="submit" value="Calculator">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $a=$_REQUEST['a'];
        $b=$_REQUEST['b'];
        $c=$_REQUEST['c'];

        $quadraticEquation=new QuadraticEquation($a,$b,$c);

        echo "a= ".$quadraticEquation->get_a()."<br>";
        echo "b= ".$quadraticEquation->get_b()."<br>";
        echo "c= ".$quadraticEquation->get_c()."<br>";
        echo "Delta= ".$quadraticEquation->getDiscriminant()."<br>";

        if ($quadraticEquation->getDiscriminant()<0){
            echo "The equation has no roots";
        }else if ($quadraticEquation->getDiscriminant()==0){
            echo "X= ".$quadraticEquation->getRoot1();
        }else {
            echo "X1= ". $quadraticEquation->getRoot1() ."<br>";
            echo "X2= ". $quadraticEquation->getRoot2() ."<br>";

        }
    }



?>
</body>
</html>
