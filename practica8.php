<?php
$a =$_GET["nombre"];
$hora =$_GET["hora"];
if ($hora > 8 && $hora <=12) {
    echo "buen dia $a, espero que tengas un buen dia.";
}
elseif ($hora > 12 && $hora <=18) {
    echo "buen dia $a, espero que hayas tenido una buena manana y una buena tarde. ";
}
elseif ($hora > 12 || $hora==24) {
    echo "Buen dia $a, espero que hayas tenido una buena manana una buena tarde y que tengas una buena noche.";
}

?>