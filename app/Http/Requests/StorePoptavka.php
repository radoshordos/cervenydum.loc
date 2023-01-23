<?php

namespace App\Http\Requests;

use App\Models\Byt;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class StorePoptavka extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'byt_id'    => ['required', new Exists(Byt::class, 'id')],
            'name'      => ['required', 'string', 'min:2', 'max:32'],
            'surname'   => ['required', 'string', 'min:2', 'max:64'],
            'phone'     => ['required', 'string', 'min:9', 'max:9'],
            'email'     => ['required', 'string', 'min:5', 'max:255'],
            'agreement' => ['accepted']
        ];
    }
}
