<?php

namespace App\Http\Requests\Representative;

use App\Http\Requests\BaseRequest;

class RepresentativeListingRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'string',
            'cnpj' => 'string',
            'city' => 'string',
            'state' => 'string',
        ];
    }
}
