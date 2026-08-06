<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Guru';
        $teachers = [

            [

            'id' => 1,

            'nip' => '198501012024',

            'name' => 'Budi Santoso',

            'gender' => 'Laki-Laki',

            'subject' => 'Akuntansi Dasar',

            'phone' => '081234560001',

            'status' => 'Aktif',

            ],

            [

            'id' => 2,

            'nip' => '198703152024',

            'name' => 'Siti Aminah',

            'gender' => 'Perempuan',

            'subject' => 'Jaringan Komputer',

            'phone' => '081234560002',

            'status' => 'Aktif',

            ]

            ];

            return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]);
    }

    public function show(string $id)
    {
        return "Show teachers detail with ID: $id";
    }

    public function create()
    {
        return "this is the page to create a new teacher";
    }

    public function edit(string $id)
    {
        return "this is the page to edit teachers with ID: $id";
    }

    public function update(string $id)
    {
        return "updating teachers with ID: $id";
    }

    public function destroy(string $id)
    {
        return "deleting teachers with ID: $id";
    }

    public function store()
    {
        return "storing new teacher";
    }
}
