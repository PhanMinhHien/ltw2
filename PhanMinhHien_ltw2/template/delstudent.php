<?php 
require_once '../controllers/ltw.php'; 
$controller = new ltw;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller->delstudent($_POST['student_id']);
    }
?>
