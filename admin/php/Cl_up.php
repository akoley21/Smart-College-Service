<?php

    include('../assets/php/curd.php');
    $obj=new Crud();
    $sql="UPDATE clean SET req='complete' WHERE id=".$_GET['id'];
    if($obj->update($sql))
    {   
        
        header("location:../clean.php");
        
    }


?>
