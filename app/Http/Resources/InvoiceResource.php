<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'patient_id' => $this->patient_id,
            'remark' => $this->remark,
            'created_at' => $this->created_at,
            'invoice_total' => $this->invoice_total,
            'paid_total' => $this->paid_total,
            'discount' => $this->discount,
            'vat' => $this->vat,
            'payment_term' => $this->payment_term,
            'previous_due' => $this->previous_due,
            'updated_at' => $this->updated_at->toDateString(),
        ];
    }
    public function with(Request $request)
    {
        return [
            'status' => 'success',
            'code' => 200

        ];
    }
}
