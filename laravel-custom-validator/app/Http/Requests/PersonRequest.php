<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Adult;
use Illuminate\Contracts\Validation\Validator ;
use Illuminate\Http\Exceptions\HttpResponseException;

class PersonRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'age' => [
                'required',
                new Adult()
            ]

        ];
    }

}
