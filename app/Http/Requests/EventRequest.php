<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'description' => 'nullable|string|max:50',
        ];
    }
}
