<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListFormRequest extends FormRequest
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
            'type' => 'required',
            'name' => 'required',
            'area_state' => 'required',
            'land_title' => 'required',
            'planting_profile' => 'required',
            'soil_type' => 'required',
            'staff_exe' => 'required',
            'staff_exed' => 'required',
            'workers' => 'required',
            'worker_dep' => 'required',
            'total_housing' => 'required',
        ];
        
    }

    protected function prepareForValidation()
    {
        $this->merge(
            [
                'type' => strip_tags($this['type']),
                'name' => strip_tags($this['name']),
                'area_state' => strip_tags($this->area_state),
                'land_title' => strip_tags($this->land_title),
                'planting_profile' => strip_tags($this->planting_profile),
                'soil_type' => strip_tags($this->soil_type),
                'staff_exe' => strip_tags($this->staff_exe),
                'staff_exed' => strip_tags($this->staff_exed),
                'workers' => strip_tags($this->workers),
                'worker_dep' => strip_tags($this->worker_dep),
                'total_housing' => strip_tags($this->total_housing),
            ]);
    }
}
