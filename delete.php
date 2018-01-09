<?php
    include('dbconfig.php');
    $id = $_REQUEST['id'];
    $sql = "delete from emp where empid = ".$id."";
    if(mysql_query($sql))
    {
        header('location:displayadmin.php');
    }
    else
    {
        echo 'Some IO Exception !<br>';
        echo '<a href = displayadmin.php>goto main page....</a>';
    }
?>