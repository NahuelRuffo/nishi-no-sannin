<?php

$conex = mysqli_connect("localhost","root","","nishi_no_sannin"); 

if (!$conex){
    echo 'error de coneccion';
}

else {
    echo 'no se conectooo';
}
?>