<?php

namespace App\Controllers;

require_once '../app/core/Controller.php';

use App\Core\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $studentModel = new Student;
        $students = $studentModel->getstudent();
        $this->view('students.index', [
            'students' => $students,
        ]);
    }

    public function show(string $id)
    {
        $studentModel = new Student;
        $student = $studentModel->getStudent($id);
        $this->view('students.show', [
            'student' => $student,
        ]);
    }

    public function create()
    {
        $this->view('students.create');
    }

    public function store(request $request)
    {
        $studentModel = new Student;
        $studentModel->insert($_POST);
    }
}
