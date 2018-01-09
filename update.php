<?php
    include('dbconfig.php');
    $id = $_REQUEST['id'];
    $sql = 'select * from emp where empid = '.$id.'';
    $result = mysql_query($sql);
    while($rec = mysql_fetch_array($result))
    {
        $empid = $rec[0];
        $ename = $rec[1];
        $job = $rec[2];
        $deptno = $rec[3];
        $mgr = $rec[4];
        $grade = $rec[5];
        $city = $rec[6];
        $salary = $rec[7];
        $doj = $rec[8];
    }
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="updaterecord.php">
  <table width="451" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" align="center"><strong>Update Record Of Employee</strong></td>
    </tr>
    <tr>
      <td width="134">Employee Name</td>
      <td width="297"><span id="sprytextfield1">
        <label for="ename"></label>
        <input type = "hidden" id = "empid" name = "empid" value = <?php echo $empid; ?>>
        <input type="text" name="ename" id="ename" value = <?php echo $ename; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Job</td>
      <td><span id="sprytextfield2">
        <label for="job"></label>
        <input type="text" name="job" id="job" value = <?php echo $job; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Dept No</td>
      <td><span id="sprytextfield3">
      <label for="deptno"></label>
      <input type="text" name="deptno" id="deptno" value = <?php echo $deptno; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Manager ID</td>
      <td><span id="sprytextfield4">
      <label for="mgr"></label>
      <input type="text" name="mgr" id="mgr" value = <?php echo $mgr; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Salary Grade</td>
      <td><span id="sprytextfield5">
      <label for="grade"></label>
      <input type="text" name="grade" id="grade" value = <?php echo $grade; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>City</td>
      <td><span id="sprytextfield6">
        <label for="city"></label>
        <input type="text" name="city" id="city" value = <?php echo $city; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Salary</td>
      <td><span id="sprytextfield7">
      <label for="salary"></label>
      <input type="text" name="salary" id="salary" value = <?php echo $salary; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Doj</td>
      <td><span id="sprytextfield8">
      <label for="doj"></label>
      <input type="text" name="doj" id="doj" value = <?php echo $doj; ?>>
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Update Record" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {validateOn:["blur", "change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {validateOn:["blur", "change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "custom", {validateOn:["blur", "change"], hint:"A"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["blur", "change"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "integer", {validateOn:["blur", "change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "date", {format:"yyyy-mm-dd", validateOn:["blur", "change"]});
</script>
</body>
