<?php

    include('../assets/php/curd.php');
    $obj=new Crud();
    $sql="UPDATE signup SET status='done' WHERE id=".$_GET['id'];
    if($obj->update($sql))
    {   
        
        header("location:../index.php");
        
    }


?>
