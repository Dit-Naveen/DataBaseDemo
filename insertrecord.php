<?php
    include('dbconfig.php');
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
        $sql = 'select * from emp';
        $result = mysql_query($sql);
        $count = 0;
        while($rec = mysql_fetch_array($result))
        {
            $count++;
        }
        $count = $count + 1;
        $sql = "insert into emp values(".$count.", '".$ename."', '".$job."', ".$deptno.", ".$mgr.", '".$grade."', '".$city."', ".$salary.", '".$doj."')";
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
?>