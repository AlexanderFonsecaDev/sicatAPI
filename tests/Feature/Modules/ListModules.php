<?php

namespace Tests\Feature\Modules;

use App\Models\Module;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListModules extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function can_fetch_single_module()
    {

        $module = factory(Module::class)->create();

        $response = $this->getJson(route('api.v1.modules.show', $module));

        $response->assertExactJson([
            'data' => [
                'type' => 'Modules',
                'id' => (string)$module->getRouteKey(),
                'attributes' => [
                    'name' => $module->name
                ],
                'links' => [
                    'self' => route('api.v1.modules.show', $module)
                ]
            ],
        ]);

    }

    /** @test */
    public function can_fetch_all_modules()
    {
        
        $modules = factory(Module::class)->times(3)->create();

        $response = $this->getJson(route('api.v1.modules.index'));

        $response->assertExactJson([
            'data' => [
                [
                    'type' => 'Modules',
                    'id' => (string)$modules[0]->getRouteKey(),
                    'attributes' => [
                        'name' => $modules[0]->name
                    ],
                    'links' => [
                        'self' => route('api.v1.modules.show', $modules[0])
                    ]
                ],
                [
                    'type' => 'Modules',
                    'id' => (string)$modules[1]->getRouteKey(),
                    'attributes' => [
                        'name' => $modules[1]->name
                    ],
                    'links' => [
                        'self' => route('api.v1.modules.show', $modules[1])
                    ]
                ],
                [
                    'type' => 'Modules',
                    'id' => (string)$modules[2]->getRouteKey(),
                    'attributes' => [
                        'name' => $modules[2]->name
                    ],
                    'links' => [
                        'self' => route('api.v1.modules.show', $modules[2])
                    ]
                ],
            ],
            'links' => [
                'self' => route('api.v1.modules.index')
            ],
            'meta' =>[
                'articles_count' => 3
            ]
        ]);

    }
}
