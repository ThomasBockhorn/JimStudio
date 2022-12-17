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
            'title' => 'required|string|max:255',
            'size' => ' required|string|max:255',
            'medium' => ' required|string|max:255',
            'location' => ' required|string|max:255',
            'frame_status' => ' required|string|max:255',
            'status' => ' required|string|max:255',
            'notes' => 'required',
            'category' => ' required|string|max:255',
            'image' => ' required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
