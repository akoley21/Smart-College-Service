<?php

    include('../assets/php/curd.php');
    $obj=new Crud();
    $sql="DELETE FROM clean WHERE id=".$_GET['id'];
    if($obj->delete($sql))
    {   
        
        header("location:../clean.php");
        
    }


?>
