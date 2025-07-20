<?php

namespace App\Http\Requests\Client;

use App\Http\Requests\BaseRequest;

/**
 * @property string $name
 * @property string $cpf
 * @property string $gender
 * @property string $city
 * @property string $state
 */
class ClientListingRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'string',
            'cpf' => 'string',
            'gender' => ['string', 'in:MASCULINO,FEMININO'],
            'city' => 'string',
            'state' => 'string',
            'date_birth' => 'date'
        ];
    }
}
