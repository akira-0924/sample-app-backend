<?php

namespace App\Http\Resources\Admin\Owner;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\Owner\IndexResource;

class IndexCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this->owners);
        // dd($request);
        return [
            // 'page' => $this->page,
            // 'limit' => $this->limit,
            'items' =>IndexResource::collection($this->owners),
        ];
    }
}
