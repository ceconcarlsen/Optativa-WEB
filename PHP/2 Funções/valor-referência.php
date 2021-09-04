<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>


    <?php

    function modifyByValue($number) #number é apenas copiado
    {
        $number += -5;
    }

    function modifyByReference(&$number) #ponteiro de number é passado para a função
    {
        $number += -5;
    }

    $years_to_complete = 8;
    modifyByValue($years_to_complete); #não afeta $years_to_complete
    echo "Anos para terminar: $years_to_complete <br/>";

    modifyByReference($years_to_complete); #afeta $years_to_complete
    echo "Anos para terminar: $years_to_complete <br/>";



    function factorial($number = 0)
    {
        $fac = 1;

        for ($i = 2; $i <= $number; ++$i)
            $fac *= $i;

        return $fac;
    }

    $fac = factorial(10);
    echo "10! = $fac <br/>";

    $fac = factorial();
    echo "0! = $fac <br/>";


    $function_factorial = "factorial";
    $fac = $function_factorial(13);
    echo "13! com chamada dinâmica: $fac<br/>";
    ?>

</body>

</html>