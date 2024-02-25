<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => '|string|max:30',
            'description' => 'string|max:50',
        ];
    }
}
