<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleCollection;
use App\Http\Resources\ModuleResource;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModuleController extends Controller
{

    public function index()
    {

        $direction = 'asc';
        $sortField = empty(request('sort')) ? 'name' : request('sort');

        if(Str::of($sortField)->startsWith('-')){
            $direction = 'desc';
            $sortField = Str::of($sortField)->substr(1);
        }

        return ModuleCollection::make(
            Module::orderBy($sortField,$direction)->get()
        );
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Module $module)
    {
        return ModuleResource::make($module);
    }

    public function update(Request $request, Module $module)
    {
        //
    }

    public function destroy(Module $module)
    {
        //
    }
}
