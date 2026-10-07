<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;

// ---------------------------------------------------------------------------------------------------------------------------------(Data management)

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->get();

        return view('students.index', [
            'title' => $title,
            'students' => $students,
        ]);
    }

    // ---------------------------------------------------------------------------------------------------------------------------------(Student function)

    public function show(Student $student)
    {
        $title = 'Sistem Sekolah - Detail Siswa';

        return view('students.show', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Catat Siswa';

        return view('students.create', [
            'title' => $title,
        ]);

    }

    public function edit(Student $student)
    {
        $title = 'Sistem Sekolah - Edit Siswa';

        return view('students.edit', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function update(Student $student, UpdateRequest $request)
    {
        // validation
        $validatedRequest = $request->validated();

        $student->update($validatedRequest);

        // Redirect to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $title = 'Sistem Sekolah - Hapus Data Siswa';

        $student->delete();

        // Redirect to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus.');
    }

    public function store(StoreRequest $request)
    {

        // validation
        $validatedRequest = $request->validated();

        Student::create($validatedRequest);

        // Redirect to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil disimpan.');
    }
}
