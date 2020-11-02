<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleCollection;
use App\Http\Resources\ModuleResource;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    public function index()
    {
        return ModuleCollection::make(Module::all());
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
