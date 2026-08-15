<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function update(string $id)
    {
        return "updating class with ID: $id";
        
        return view('classes.update', [
            'title' => $title,
            'class' => $class,
        ]);
    }
}
