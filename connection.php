<?php
$linked = new mysqli("localhost", "root","", "new_wamp");
if(!$linked){
    die(mysqli_error($linked));
}

?>