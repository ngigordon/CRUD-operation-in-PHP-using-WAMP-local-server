<?php
include 'connection.php';
if(isset($_GET['deleteID'])){
    $id= $_GET['deleteID'];
    $query="delete from `crud` where id = $id";
    $result=mysqli_query($linked,$query);
    if($result){
        header('location:display.php');
    }else{
     die(mysqli_error($linked));
    }

}
?>