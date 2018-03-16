<?php

class students {
    public function connect() {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }

    public function getStudent() {
        $conn = $this->connect();
        $sql = 'SELECT * FROM students';

        $data = mysqli_query($conn, $sql);

        $rows = [];

        while ($row = mysqli_fetch_assoc($data)) {
            $rows[] = $row;
        }
        $conn->close();
        return $rows;
    }

    public function addstudent($student_id, $student_name) {
        $conn =  $this->connect();
        $sql = "INSERT INTO students(student_name)
                VALUES ('$student_name')";
        $result = mysqli_query($conn, $sql);
        $conn->close();
        return $result;
    }

    public function deletestudent($id) {
        $conn = $this->connect();

        $sql = "DELETE FROM students
                WHERE student_id = $id";

        $result = mysqli_query($conn, $sql);

        $conn->close();

        return $result; 
    }
}