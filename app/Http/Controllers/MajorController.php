<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    
    public function index()
    {
        return "Menampilkan halaman daftar major";
    }

    
    public function create()
    {
        return "Menampilkan halaman tambah major";
    }

    
    public function store(Request $request)
    {
        return "Melakukan penambahan data major";
    }

    
    public function show(string $id)
    {
        return "Menampilkan major dangan ID: {$id}";
    }

    
    public function edit(string $id)
    {
        return "Menampilkan halaman edit siswa dengan ID: {$id}";
    }

    
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data majo dengan ID: {$id}";
    }

    
    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}