<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        $currency = strtoupper($request->query('currency', 'RUB'));
        $price = $this->price;

        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => match ($currency) {
                'USD' => '$' . number_format($price / 90, 2),
                'EUR' => '€' . number_format($price / 100, 2),
                default => number_format($price, 0, '', ' ') . ' ₽',
            },
        ];
    }
}
