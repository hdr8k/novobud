<?php

declare(strict_types=1);

namespace App\Http\Requests\Forms;

use App\Services\Recall\RecallDto;
use Illuminate\Foundation\Http\FormRequest;

final class RecallRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'phone' => ['required', 'string'],
            'name'  => 'string|nullable',
        ];
    }

    public function getDto(): RecallDto
    {
        return new RecallDto($this->get('phone'));
    }

}
