<?php

namespace App\Http\Requests\Forms;

use App\Services\Forms\Feedback\FeedbackDto;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class FeedbackRequest
 * @package App\Http\Requests\Forms
 */
final class FeedbackRequest extends FormRequest
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
            'name'  => 'nullable|string',
//            'name_t'  => 'required|string',
            'phone' => 'required|string',
            'text'  => 'nullable|string',
            'url'   => 'required|string|url',
        ];
    }

    /**
     * @return FeedbackDto
     */
    public function getDto(): FeedbackDto
    {
        return new FeedbackDto(
            $this->get('name_t'),
            $this->get('phone'),
            $this->get('text'),
            $this->get('url')
        );
    }
}
