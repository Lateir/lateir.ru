<?php

namespace App\Http\Requests\Comments;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'text' => 'required|string'
        ];
    }
}
