<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//---------------------------------------------------------------------------------------------------------------------------------(Students data management)

class StudentController extends Controller
{
    public function index()
    {
        return 'Showing students list';
    }

    public function show(string $id)
    {
        return "Show students detail with ID: $id";
    }

    public function create()
    {
        return "this is the page to create a new student";
    }

    public function edit(string $id)
    {
        return "this is the page to edit students with ID: $id";
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
