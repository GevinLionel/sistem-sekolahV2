<?php

use App\Models\Student;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

test('student form submission stores student data', function () {
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nis', 4)->unique();
        $table->string('name');
        $table->string('class');
        $table->string('major');
        $table->string('gender');
        $table->timestamps();
    });

    $student = [
        'nis' => '1004',
        'name' => 'Citra',
        'gender' => 'Perempuan',
        'major' => 'TKJ',
        'class' => 'X TKJ 1',
    ];

    $this->post(route('students.store'), $student)
        ->assertRedirect(route('students.index'));

    $this->assertDatabaseHas('students', $student);
});

test('student update changes all editable fields', function () {
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nis', 4)->unique();
        $table->string('name');
        $table->string('class');
        $table->string('major');
        $table->string('gender');
        $table->timestamps();
    });

    $student = Student::create([
        'nis' => '1004',
        'name' => 'Citra',
        'gender' => 'Perempuan',
        'major' => 'TKJ',
        'class' => 'X TKJ 1',
    ]);

    $updatedStudent = [
        'nis' => '1005',
        'name' => 'Dewi',
        'gender' => 'Laki-laki',
        'major' => 'BiD',
        'class' => 'XI BiD 2',
    ];

    $this->put(route('students.update', ['student' => $student->id]), $updatedStudent)
        ->assertRedirect(route('students.index'));

    $this->assertDatabaseHas('students', [
        'id' => $student->id,
        ...$updatedStudent,
    ]);
});
