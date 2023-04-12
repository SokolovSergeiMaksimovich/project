<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuleCreateRequest;
use App\Http\Requests\ModuleUpdateRequest;
use App\Models\Module;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $modules = Module::all();
        return view('module.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuleCreateRequest $request)
    {
        module::create($request->all());

        return redirect()->route('module.index')->with('success', 'Модуль создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        return view('module.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('module.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModuleUpdateRequest $request, Module $module)
    {
        $module->update($request->all());

        return redirect()->route('module.index')->with('success', 'Модуль Обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('module.index')->with('success', 'Модуль удален');
    }
}
