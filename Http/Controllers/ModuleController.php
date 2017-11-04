<?php

namespace Unet\Module\Http\Controllers;

use \Unet\Module\Http\Models\Module;
use \Illuminate\Support\Facades\Response;
use \Illuminate\Support\Facades\View;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Lang;
use \App\Http\Controllers\Controller;
use \Unet\Module\Http\Requests\ModuleRequest;
use \Exception;

/**
 * Class ModuleController
 * @package Unet\Module\Http\Controllers
 */
class ModuleController extends Controller
{
    /**
     * @var \Unet\Module\Http\Helpers\Data
     */
    private $helper;

    /**
     * @var \Unet\Module\Http\Repository\ModuleRepository
     */
    private $moduleRepository;

    /**
     * ModuleController constructor.
     * @param \Unet\Module\Http\Repository\ModuleRepository $moduleRepository
     * @param \Unet\Module\Http\Helpers\Data $helper
     */
    public function __construct(
        \Unet\Module\Http\Repository\ModuleRepository $moduleRepository,
        \Unet\Module\Http\Helpers\Data $helper
    ) {
        $this->helper = $helper;
        $this->moduleRepository = $moduleRepository;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $modules = $this->moduleRepository->orderBy('id', 'DESC')->paginate(10);

        return View::make('Module::index')->with('modules', $modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('Module::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ModuleRequest $moduleRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ModuleRequest $moduleRequest)
    {
        try {
            $this->moduleRepository->create(Input::all());
            flash(Lang::get('Module::module.create_success'))->success();

            return Redirect::to('module');
        } catch (Exception $e) {
            report($e);
            flash($e->getMessage())->error();

            return Redirect::to('module/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $module = Module::find($id);

        return View::make('Module::show')->with('module', $module);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $module = Module::find($id);

        return View::make('Module::edit')->with('module', $module);
    }

    /**
     * Update the specified resource in storage.
     * @param ModuleRequest $moduleRequest
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ModuleRequest $moduleRequest, $id)
    {
        try {
            $this->moduleRepository->update(Input::all(), $id);
            flash(Lang::get('Module::module.update_success'))->success();

            return Redirect::to('module');
        } catch (Exception $e) {
            report($e);
            flash($e->getMessage())->error();

            return Redirect::to('module/' . $id . '/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $this->moduleRepository->delete($id);
            flash(Lang::get('Module::module.delete_success'))->success();

            return Redirect::to('module');
        } catch (Exception $e) {
            report($e);
            flash($e->getMessage())->error();

            return Redirect::to('module');
        }
    }
}
