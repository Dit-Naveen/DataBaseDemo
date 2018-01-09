<?php
    session_start();
    include('dbconfig.php');
    $uid = $_POST['uid'];
    $pass = $_POST['upass'];
    $logtype = $_POST['logtype'];
    $count=0;
    if(isset($uid)&&isset($pass))
    {
        if($logtype=='admin')
        {
            $sql = 'select * from login where uid="'.$uid.'" and upass="'.$pass.'" and logtype="'.$logtype.'"';
            $result = mysql_query($sql);
            while($rec=mysql_fetch_array($result))
            {
                $count++;
            }
            if($count!=0)
            {
                header('location:displayadmin.php');
                setcookie('user', $uid, time()+3600);
                $_SESSION['user'] = $uid;
            }
            else
            {
                header('location:index.html');
            }
        }
        else if($logtype=='emp')
        {
            $sql = 'select * from login where uid="'.$uid.'" and upass="'.$pass.'" and logtype="'.$logtype.'"';
            $result = mysql_query($sql);
            while($rec=mysql_fetch_array($result))
            {
                $count++;
            }
            if($count!=0)
            {
                header('location:employee/displayemp.php');
                setcookie('user', $uid, time()+3600);
                $_SESSION['user'] = $uid;
            }
            else
            {
                header('location:index.html');
            }
        }
    }
?>