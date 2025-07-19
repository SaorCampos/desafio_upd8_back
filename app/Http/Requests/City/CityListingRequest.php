<?php

namespace App\Http\Requests\City;

use App\Http\Requests\BaseRequest;

/**
 * @property string name
 */
class CityListingRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'string',
        ];
    }
}
