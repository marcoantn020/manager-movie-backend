<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $dateFormat = isset($this->created_at) ? Carbon::make($this->created_at)->format('d/m/y H:i') : null;
        return  [
            'id' => $this->id,
            'full_name' => "$this->first_name $this->last_name",
            'email' => $this->email,
            'phone' => $this->phone,
            'photo'  => $this->photo ? asset('storage/' . $this->photo) : null,
            'created_at' => $dateFormat,
        ];
    }
}
