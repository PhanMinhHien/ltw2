<?php
    include './configs.php';
    require_once './models/students.php';

    $obj = new students();
    $students = $obj->getStudent();

	include './views/view.php'; 


