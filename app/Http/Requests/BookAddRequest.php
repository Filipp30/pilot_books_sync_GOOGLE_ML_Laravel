<?php

namespace App\Http\Requests;

use App\Models\Enums\AircraftTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookAddRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'document_url' => ['required', 'url'],
            'type' => Rule::in(AircraftTypes::values()),
        ];
    }
}