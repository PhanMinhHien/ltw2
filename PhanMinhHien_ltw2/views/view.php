
<html>
    <head>
    <style>
        table,tr,td {
            border : 1px solid #000;
        }  
    </style>
    </head>
    <body>
        <table>
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>   
                <td>Action</td>            
            </tr>
            <?php foreach($students as $student): ?>
            <tr>
                <td><?php echo $student['student_id'] ?></td>
                <td><?php echo $student['student_name'] ?></td>
                <!--<form action="addstudent.php">-->
                <td><a name="ADD" href="template/addstudent">ADD </a></td>
                <!---</form> -->
                <form method="post" action="template/delstudent">
                <input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>">
                <td><a href=""></a><button type="submit" name="Del" >DELETE</button></td>
                </form> 
            </tr>
            <?php endforeach; ?>
        </table> 
    </body>
</html>