<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtid' => 'required',
            'txtnis' => 'required|unique:student,NIS,|min:7|max:10',
            'txtname' => 'required|unique:student,Nama,|min:10|max:255',
            'txtasal_sekolah' => 'required|unique:student,Nama,|min:10|max:255',
            'txttanggal_lahir' => 'required',
            'txtjenis_kelamin' => 'required',
            'txtalamat' => 'required|unique:student,Alamat,|min:10|max:255',
            'txtkota' => 'required|unique:student,Nama,|min:4|max:155',
        ];
    }
    public function messages(): array
    {
        return [
            'txtid.required' => ':attribute Tidak Boleh Kosong',
            'txtid.unique' => ':attribute Sudah Ada',
            'txtnis.required' => ':attribute Tidak Boleh Kosong',
            'txtname.required' => ':attribute Tidak Boleh Kosong',
            'txtasal_sekolah.required' => ':attribute Tidak Boleh Kosong',
            'txttanggal_lahir.required' => ':attribute Tidak Boleh Kosong',
            'txtjenis_kelamin.required' => ':attribute Tidak Boleh Kosong',
            'txtalamat.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtid' => 'ID Siswa',
            'txtnis' => 'NIS Siswa',
            'txtname' => 'Nama Siswa',
            'txtasal_sekolah' => 'Asal Sekolah Siswa',
            'txttanggal_lahir' => 'Tanggal Lahir Siswa',
            'txtjenis_kelamin' => 'Jenis Kelamin Siswa',
            'txtalamat' => 'Alamat Siswa',
        ];
    }
}
