<?php
    error_reporting(0);
    $skey = $_REQUEST['skey'];
    $svalue = $_REQUEST['svalue'];
    if(isset($skey)&&isset($svalue))
    {
       if($skey=='ename')
        {
            $sql = "select * from emp where ename like '".$svalue."%'";
            displayData($sql);
        }
        else if($skey=='deptno')
        {
            $sql = "select * from emp where deptno = ".$svalue."";
            displayData($sql);
        }
        else if($skey=='job')
        {
            $sql = "select * from emp where job like '".$svalue."%'";
            displayData($sql);
        }
        else if($skey=='city')
        {
            $sql = "select * from emp where city like '".$svalue."%'";
            displayData($sql);
        }
        else
        {
            $sql = "select * from emp";
            displayData($sql);
        }
    }
        function displayData($sql)
        {
            include('dbconfig.php');
            $result = mysql_query($sql);
            echo '<html>';
            echo '<head>';
            echo '<link rel = stylesheet type = text/css href = style1.css media=screen>';
            echo '</head>';
            echo '<body>';
            echo '<table id = tb1 align = center border = 0 width = 850>';
            echo '<tr>';
            echo '<td colspan = 9>';
            echo '<hr color = white>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>';
            echo 'Empid';
            echo '</td>';
            echo '<td>';
            echo 'Ename';
            echo '</td>';
            echo '<td>';
            echo 'Job';
            echo '</td>';
            echo '<td>';
            echo 'Deptno';
            echo '</td>';
            echo '<td>';
            echo 'Manager';
            echo '</td>';
            echo '<td>';
            echo 'Grade';
            echo '</td>';
            echo '<td>';
            echo 'City';
            echo '</td>';
            echo '<td>';
            echo 'Salary';
            echo '</td>';
            echo '<td>';
            echo 'Doj';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan = 9>';
            echo '<hr color = white>';
            echo '</td>';
            echo '</tr>';
            while($rec = mysql_fetch_array($result))
            {
                echo '<tr>';
                echo '<td>';
                echo $rec[0];
                echo '</td>';
                echo '<td>';
                echo $rec[1];
                echo '</td>';
                echo '<td>';
                echo $rec[2];
                echo '</td>';
                echo '<td>';
                echo $rec[3];
                echo '</td>';
                echo '<td>';
                echo $rec[4];
                echo '</td>';
                echo '<td>';
                echo $rec[5];
                echo '</td>';
                echo '<td>';
                echo $rec[6];
                echo '</td>';
                echo '<td>';
                echo $rec[7];
                echo '</td>';
                echo '<td>';
                echo $rec[8];
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td colspan = 11>';
                echo '<hr color = skyblue>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</body>';
            echo '</html>';
        }
    
    echo '<center><a href = displayadmin.php style=color:gray;text-decoration:none;font-size:14pt><img src = back.png>goto back</a></a></center>';
?>

