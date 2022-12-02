<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaintingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'size' => ' required',
            'medium' => ' required',
            'location' => ' required',
            'frame_status' => ' required',
            'status' => ' required',
            'notes' => 'required',
            'category' => ' required',
            'image' => ' required'
        ];
    }
}
