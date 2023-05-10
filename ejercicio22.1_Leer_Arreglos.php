<?php //Los arreglos son una forma de alamacenar informacion, apauntando varios valores

           //                    0              1             2
           $frutas=array("f"=>"fresa", "m"=>"manzana", "p"=>"pera");

    print_r($frutas);

    // echo $frutas[2];

    echo $frutas ["m"]."<br/>";

    foreach($frutas as $indice=>&$valor){

        //echo $indice."<br/>";

        //echo $frutas[$indice]."<br/>";

        echo "El valor ".$valor/*."<br/>"*/." Tiene el indice: ".$indice."<br/>";

    }


?>