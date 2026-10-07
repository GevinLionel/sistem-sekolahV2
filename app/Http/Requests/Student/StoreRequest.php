<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:TKJ,AKL,BiD'],
            'class' => ['required', 'string', 'max:255'],
        ];
    }

    public function attributes(): array
    {
        return [
            'nis' => 'Nomor Induk Siswa',
            'name' => 'Nama',
            'gender' => 'Jenis Kelamin',
            'major' => 'Jurusan',
            'class' => 'Kelas',
        ];
    }

    public function messages(): array
    {
        return [
            'nis.required' => 'Nomor Induk Siswa harus diisi.',
            'nis.string' => 'Nomor Induk Siswa harus berupa teks.',
            'nis.size' => 'Nomor Induk Siswa harus terdiri dari :size karakter.',
            'nis.unique' => 'Nomor Induk Siswa sudah digunakan.',
            'name.required' => 'Nama harus diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'gender.required' => 'Jenis Kelamin harus diisi.',
            'gender.string' => 'Jenis Kelamin harus berupa teks.',
            'gender.in' => 'Jenis Kelamin harus salah satu dari: Laki-laki, Perempuan.',
            'major.required' => 'Jurusan harus diisi.',
            'major.string' => 'Jurusan harus berupa teks.',
            'major.in' => 'Jurusan harus salah satu dari: TKJ, AKL, BiD.',
            'class.required' => 'Kelas harus diisi.',
            'class.string' => 'Kelas harus berupa teks.',
            'class.max' => 'Kelas tidak boleh lebih dari :max karakter.',
        ];
    }
}
