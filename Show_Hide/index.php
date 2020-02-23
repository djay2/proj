<?php
    include("config.php");
?>
<!doctype html>
<html>
<head>
    <title>How to Hide and Show the Table column using jQuery</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>

</head>
<body>
<div class="container">
    <div>
        <strong>Checked the Checkbox for Hide column</strong><br/>
        <ul style="list-style-type:none;">
	<li> <input type="checkbox" name="Name" class="hidecol" value="name" id="col_2"/>&nbsp;Name&nbsp;</li>
        <li><input type="checkbox" name="Salary" class="hidecol" value="salary" id="col_3" />&nbsp;Salary&nbsp;</li>
        <li><input type="checkbox" name="" class="hidecol" value="gender" id="col_4" />&nbsp;Gender&nbsp;</li>
        <li><input type="checkbox" class="hidecol" value="city" id="col_5" />&nbsp;City</li>
        <li><input type="checkbox" class="hidecol" value="email" id="col_6" />&nbsp;Email</li>
	</ul>    
</div>
    <table width="100%" id="emp_table" border="0">
        <tr class="tr_header">
            <th>S.no</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Gender</th>
       
        </tr>
        <?php

        // uling rows
        $sql = "Select * FROM user";
        $result = mysqli_query($con,$sql);
        $sno = 1;

        while($fetch = $result->fetch_assoc()){
            $name = $fetch['name'];
            $salary = $fetch['mobile_no'];
            $gender = $fetch['Status'];
            //$city = $fetch['city'];
            //$email = $fetch['email'];
            ?>
            <tr>
                <td align='center'><?php echo $sno; ?></td>
                <td align='center'><?php echo $name; ?></td>
                <td align='center'><?php echo $salary; ?></td>
                <td align='center'><?php echo $gender; ?></td>

            </tr>
            <?php
            $sno ++;
        }
        ?>
    </table>

</div>
</body>
</html>
