<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ModuleCollection extends ResourceCollection
{

    public $collects = ModuleResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => route('api.v1.modules.index')
            ],
            'meta' =>[
                'articles_count' => $this->collection->count()
            ]
        ];
    }
}
