<?php

namespace Tests\Feature\Modules;

use App\Models\Module;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SortModules extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function it_can_sort_modules_by_name_asc()
    {
        $article1 = factory(Module::class)->create(['name' => 'C Name']);
        $article2 = factory(Module::class)->create(['name' => 'A Name']);
        $article3 = factory(Module::class)->create(['name' => 'B Name']);

        $url = route('api.v1.modules.index',['sort'=>'name']);

        $this->getJson($url)->assertSeeInOrder([
            'A Name',
            'B Name',
            'C Name',
        ]);

    }

    /** @test */
    public function it_can_sort_modules_by_name_desc()
    {
        $article1 = factory(Module::class)->create(['name' => 'C Name']);
        $article2 = factory(Module::class)->create(['name' => 'A Name']);
        $article3 = factory(Module::class)->create(['name' => 'B Name']);

        $url = route('api.v1.modules.index',['sort'=>'-name']);

        $this->getJson($url)->assertSeeInOrder([
            'C Name',
            'B Name',
            'A Name',
        ]);

    }
}
