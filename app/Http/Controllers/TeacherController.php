<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return 'Showing teachers list';
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
