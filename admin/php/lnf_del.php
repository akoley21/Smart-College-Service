<?php

    include('../assets/php/curd.php');
    $obj=new Crud();
    $sql="DELETE FROM lnf WHERE id=".$_GET['id'];
    if($obj->delete($sql))
    {   
        
        header("location:../lnf_a.php");
        
    }


?>
