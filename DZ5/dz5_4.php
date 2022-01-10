<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // var 1
        echo "variant 1 =>> ";
        function fibonacci()
        {
            echo '1';
            $fib = [0,1];
            for($i=1;$i<20;$i++)
            {
                $fib[] = $fib[$i]+$fib[$i-1];
                echo(", ");
                echo ($fib[$i]+$fib[$i-1]);
            }
            return $fib;
        }
        fibonacci();
        echo "</br>";
        
        //var 2
        echo "variant 2 =>> ";
        function fibonacci2($x=1,$n=10){
            static $i=0;
            static $y=0;
            echo "$x, ";
            $y+=$x;
            $i++;
            echo "$y, ";
            if($i<$n){
                fibonacci2($x+$y);
            };

        };
        fibonacci2();
    ?>
    
</body>
</html>