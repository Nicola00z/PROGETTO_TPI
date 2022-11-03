<?php 
    $items = array(
        array(1, "Maglia", "28/10/2022", "A210"),
        array(2, "Carica Telefono", "25/10/2022", "A320"),
        array(3, "Sacca da ginnastica", "23/10/2022", "A053"),
        array(4, "Portafoglio", "02/11/2022", "A241"),
    );

    $index = 0;
    while($index != count($items)){

        echo "
        <li> <div class='ItemList'> <p style='width: 33%'>" . $items[$index][1] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $items[$index][3] . "</p> &#9;&#9;&#9;<p style='width: 33%'>" . $items[$index][2] . "</p> &#9;&#9;&#9;</div> </li>";
        $index += 1;
    }
?>