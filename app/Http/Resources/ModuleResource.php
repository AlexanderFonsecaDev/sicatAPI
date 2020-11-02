<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModuleResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'type' => 'Modules',
            'id' => (string)$this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->resource->name
            ],
            'links' => [
                'self' => route('api.v1.modules.show', $this->resource)
            ]
        ];
    }
}
