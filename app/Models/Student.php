<?php

namespace App\Models;
require_once '../app/core/database.php';

use App\Core\Database;

class Student extends Database
{
    protected $table = 'students'; 

    public function getstudent()
    {
        $students = [];
        
        $query = "SELECT * FROM " . $this->table;
        $snmt = $this->connection->prepare($query);
        $snmt->execute();
        $result = $snmt->get_result();
        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }
        return $students;
    }
}

require_once '../app/core/Controller.php';
require_once '../app/core/Student.php';

use App\Core\Controller;
use App\Models\Student;


class studentController extends Controller
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getstudent();
        $this->view('students.index', ['students' => $students]);
    }
}
public function getStudent(int $id){
    $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
    $stmt = $this->connection->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
    
public function insert(array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "INSERT INTO " . $this->table . " (name, nis, class, phone_number) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssss", $name, $nis, $class, $phoneNumber);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: /students");
            exit;
        } else {
            echo "Error: " . to store student;
        }
    }

    

?>