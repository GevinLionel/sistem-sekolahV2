<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
      public function index()
    {
        return 'Showing major list';
    }

    public function show(string $id)
    {
        return "Show major detail with ID: $id";
    }

    public function create()
    {
        return "this is the page to create a new major";
    }

    public function edit(string $id)
    {
        return "this is the page to edit majors with ID: $id";
    }

    public function update(string $id)
    {
        return "updating majors with ID: $id";
    }

    public function destroy(string $id)
    {
        return "deleting majors with ID: $id";
    }

    public function store()
    {
        return "storing new major";
    }
}
