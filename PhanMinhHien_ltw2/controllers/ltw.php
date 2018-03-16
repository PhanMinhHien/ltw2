<?php 
	include '../configs.php';
    require_once '../models/students.php';
/**
* 
*/
	class ltw
	{
		public function addstudents() {
			$student_id = $_POST['student_id'];
			$student_name = $_POST['student_name'];
			$student = new students();
			$status = $student->addstudent($student_id, $student_name);
		}
		public function delstudent($id) {
			$conn = new students();
			$conn->deletestudent($id);
		}
	} 
?>