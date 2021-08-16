<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FriendshipRequest extends FormRequest
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
            'user1_id' => 'required|exists:users,id',
            'user2_id' => 'required|exists:users,id|different:user1_id',
        ];
    }
}
