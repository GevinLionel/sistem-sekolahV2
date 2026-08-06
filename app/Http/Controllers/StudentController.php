<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//---------------------------------------------------------------------------------------------------------------------------------(Data management)

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ',
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'NIna',
                'class' => 'XII TKJ 3',
                'major' => 'AKL',
            ]


        ];
        
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

//---------------------------------------------------------------------------------------------------------------------------------(Student function)

    public function show(string $id)
    {
        return view('students.show')->with('id', $id);
    }

    public function create()
    {
        return view('students.create');
    }

    public function edit(string $id)
    {
        return view('students.edit')->with('id', $id);
    }

    public function update(string $id)
    {
        return "updating students with ID: $id";
    }

    public function destroy(string $id)
    {
        return "deleting students with ID: $id";
    }

    public function store()
    {
        return "storing new student";
    }

    
}
