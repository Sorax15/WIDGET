<?php

namespace App\Http\Requests;

use App\Services\Requests\AlertRequestService;

class QuestionRequestService extends AlertRequestService
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
            'name' => 'required|max:255',
            'phone' => 'required|numeric|min:10',
            'question' => 'required|min:10'
        ];
    }
}
