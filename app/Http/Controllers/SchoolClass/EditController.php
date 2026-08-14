<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit kelas';

        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso'
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah'
            ]
        ];

        $class = collect($classes)->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404, 'Kelas tidak ditemukan');
        }

        return view('classes.edit', [
            'title' => $title,
            'class' => $class,
        ]);
    }
}

           
