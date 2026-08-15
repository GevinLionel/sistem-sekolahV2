<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    private array $majors = [
        [
            'id' => 1,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ],
        [
            'id' => 2,
            'code' => 'TKJ',
            'name' => 'Teknik Komputer dan Jaringan',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
        ],
        [
            'id' => 3,
            'code' => 'BD',
            'name' => 'Bisnis Digital',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
        ],
    ];

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Jurusan';

        return view('majors.index', [
            'title' => $title,
            'majors' => $this->majors,
        ]);
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Jurusan';

        $major = collect($this->majors)->firstWhere('id', (int) $id);

        if (!$major) {
            abort(404, 'Jurusan tidak ditemukan');
        }

        return view('majors.show', [
            'title' => $title,
            'major' => $major,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Catat Jurusan';

        return view('majors.create', [
            'title' => $title,
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit Jurusan';

        $major = collect($this->majors)->firstWhere('id', (int) $id);

        if (!$major) {
            abort(404, 'Jurusan tidak ditemukan');
        }

        return view('majors.edit', [
            'title' => $title,
            'major' => $major,
        ]);
    }

    public function update(string $id)
    {
        return "updating major with ID: $id";
    }

    public function destroy(string $id)
    {
        return "deleting major with ID: $id";
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // TODO: persist $validated (array for now, database later)

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil ditambahkan.');
    }
}