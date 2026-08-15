<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'grade' => 'required|string|max:10',
            'major' => 'required|string|max:10',
            'homeroom_teacher' => 'required|string|max:255',
        ]);

        // TODO: persist $validated (array for now, database later)

        return redirect()->route('classes.index')->with('success', 'Kelas berhasil ditambahkan.');
    }
}
