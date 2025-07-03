<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'patient_id' => 'required|integer',
            'remark' => 'nullable|string',
            'invoice_total' => 'required|numeric',
            'paid_total' => 'required|numeric',
            'discount' => 'required|numeric',
            'vat' => 'required|numeric',
            'payment_term' => 'nullable|string',
            'previous_due' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'patient_id.required' => 'Patient ID is required.',
            'patient_id.integer' => 'Patient ID must be a whole number.',

            'remark.string' => 'Remark must be a valid text.',

            'invoice_total.required' => 'Invoice total is required.',
            'invoice_total.numeric' => 'Invoice total must be a number.',

            'paid_total.required' => 'Paid total is required.',
            'paid_total.numeric' => 'Paid total must be a number.',

            'discount.required' => 'Discount is required.',
            'discount.numeric' => 'Discount must be a number.',

            'vat.required' => 'VAT is required.',
            'vat.numeric' => 'VAT must be a number.',

            'payment_term.string' => 'Payment term must be a valid text.',

            'previous_due.required' => 'Previous due is required.',
            'previous_due.numeric' => 'Previous due must be a number.',
        ];
    }

}
