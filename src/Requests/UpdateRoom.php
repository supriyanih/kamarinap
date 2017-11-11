<?php

namespace Supriyanih\Kamarinap\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoom extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'kode_room' => 'required',
            'nama_room' => 'required',
        ];
    }

    public function messages()
    {
         $messages = [
            'kode_room.required' => 'Kode Ruangan Masih Kosong',
            'nama_room.required' => 'Nama Ruangan Tidak Boleh Kosong'
        ];

        if ('PATCH' === $this->method()){

            $messages = [
                'kode_room.required' => 'Kode tidak boleh kosong',
                'nama_room.required' => 'Nama Ruangan Tidak Boleh Kosong'
            ];

        }

        return $messages;
    }
}
