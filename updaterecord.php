<?php
    include('dbconfig.php');
    $empid = $_REQUEST['empid'];
    $ename = $_REQUEST['ename'];
    $job = $_REQUEST['job'];
    $deptno = $_REQUEST['deptno'];
    $mgr = $_REQUEST['mgr'];
    $grade = $_REQUEST['grade'];
    $city = $_REQUEST['city'];
    $salary = $_REQUEST['salary'];
    $doj = $_REQUEST['doj'];
    if(isset($ename)&&isset($job)&&isset($deptno)&&isset($mgr)&&isset($grade)&&isset($city)&&isset($salary)&&isset($doj))
    {
        $sql = "update emp set ename = '".$ename."',job ='".$job."', deptno = ".$deptno.", mgr = ".$mgr.", salegrade ='".$grade."', city = '".$city."', salary = ".$salary.", doj = '".$doj."' where empid = ".$empid."";
        if(mysql_query($sql))
        {
            header('location:displayadmin.php');
        }
        else
        {
            echo 'Some IO Exception !<br>';
            echo '<a href = displayadmin.php>goto main page....</a>';
        }
    }
    else
    {
        header('location:displayadmin.php');
    }