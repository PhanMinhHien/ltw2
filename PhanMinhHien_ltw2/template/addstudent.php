<?php 
require_once '../controllers/ltw.php'; 
$controller = new ltw;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller->addstudents();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Thêm sinh viên </h1>
        <a href="/test/index.php">Trở về</a> <br/> <br/>
        <form method="post" action="addstudent">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>ID</td>
                    <td>
                        <input type="text" name="student_id" value="<?php echo !empty($data['student_id']) ? $data['student_id'] : ''; ?>"/>
                        <?php if (!empty($errors['student_id'])) echo $errors['student_id']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" required="" pattern="[a-zA-Z]{2,60}" name="student_name" value="<?php echo !empty($data['student_name']) ? $data['student_name'] : ''; ?>"/>
                        <?php if (!empty($errors['student_name'])) echo $errors['student_name']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_student" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>