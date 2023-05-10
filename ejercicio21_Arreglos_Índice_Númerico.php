<?php //Los arreglos son una forma de alamacenar informacion, apauntando varios valores

    //                 0        1        2
    $frutas= array ("Fresa", "Pera", "Manzana");

    print_r($frutas);

    echo $frutas[2]."<br/>";

    for($indice=0;$indice<3;$indice++){

        echo $frutas[$indice]."<br/>";


    }


?>