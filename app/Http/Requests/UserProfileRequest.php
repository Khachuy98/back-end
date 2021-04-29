<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return $this->updateRules();
    }

    //update User
    public function updateRules(): array
    {
        $id = $this->id;
        return [
            // 'name'              => 'required|string',
            // 'dateofbirth'       => 'required',
            // 'phone'             => 'required|numeric',
            // 'address'           => 'required|string'
        ];
    }
    public function updateFilter()
    {
        return $this->only([
            'name',
            'dateofbirth',
            'phone',
            'address'
        ]);
    }
}
