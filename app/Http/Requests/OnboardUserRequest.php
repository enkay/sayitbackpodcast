<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardUserRequest extends FormRequest
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
					'first_name' => ['required', 'string', 'max:255'],
					'location' => ['required', 'string', 'in:nyc,la,mia'],
					'birthday_month' => ['required', 'numeric', 'min:1', 'max:12'],
					'birthday_day' => ['required', 'numeric', 'min:1', 'max:31'],
					'birthday_year' => ['required', 'numeric', 'min:1000', 'max:9999'],
					'occupation' => ['required', 'string', 'max:255'],
					'gender' => ['required', 'string', 'in:man,woman,other'],
					'interested_in' => ['required', 'string', 'in:men,women,all'],
					'instagram' => ['nullable', 'string', 'max:255'],
        ];
    }
}
