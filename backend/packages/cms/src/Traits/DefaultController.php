<?php

declare(strict_types=1);

namespace Op\Cms\Traits;

use Illuminate\Http\Request;

trait DefaultController {

  /**
   * This constant defines the Blade view namespace and directory prefix used 
   * when rendering CRUD (Create, Read, Update, Delete) components in the CMS.
   * 
   * @var string
   */
  protected const CRUD_VIEWS = 'cms::components.crud_views.';
  
  /**
   * The fully qualified class name of the model associated with the controller.
   * This must be set overridden the child controller.
   * 
   * @var string
   */
  protected const MODEL_CLASS = null;

  /**
   * Route name for operations must be overridden in child controllers.
   * 
   * @var string
   */
  protected const MODULE_NAME = null;

  /**
   * Return an array of form fields used in the create show edit views.
   *
   * @return array List of fields elements for the given controller.
   */
  abstract protected function prepareFormFields(): array;

  /**
   * Return an array of vie index requaier data.
   *
   * @return array List of fields elements for the given controller.
   */
  abstract protected function indexPrepare(Request $request): array;

  /**
   * Return an array of title for each views.
   * 
   * @return array List of titles
   */
  abstract protected function titles(): array;

  /**
   * Returns an instance of the model defined in the child controller.
   *
   * @return \Illuminate\Database\Eloquent\Model
   */
  protected function getModelInstance(): \Illuminate\Database\Eloquent\Model {
    return app(static::MODEL_CLASS);
  }

  /**
   * Prepares the data for the index view by calling the indexPrepare()
   * method with the current request, and then returns the corresponding
   * Blade view with the prepared data.
   *
   * @param \Illuminate\Http\Request $request  The incoming HTTP request.
   * @return \Illuminate\View\View  The rendered index view.
   */
  public function index(Request $request): \Illuminate\View\View {
    $data = $this->indexPrepare($request);
    return view(static::CRUD_VIEWS . 'index', [
      'title' => $this->titles()['index'] ?? '',
      'buttons' => $data['buttons'],
      'table' => new \Op\Cms\View\FormFields\Extra\Fields\TableControl([
        'type' => 'intex',
        'labels' => $data['labels'],
        'filterable' => $data['filterable'],
        'data' => $data['data'],
        'destinations' => $data['destinations'],
      ]),
    ]);
  }


  /**
   * Displays the form view for creating a new record.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(): \Illuminate\View\View {
    return view(static::CRUD_VIEWS . 'create', [
      'title' => $this->titles()['create'] ?? '',
    ]);
  }

  /**
   * Handles storing a new record.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request) {
    //
  }

  /**
   * Displays the details of a single record.
   *
   * @param  int  $id  The ID of the record to display.
   * @return \Illuminate\Http\Response
   */
  public function show(int $id): \Illuminate\View\View {
    return view(static::CRUD_VIEWS . 'show', [
      'title' => $this->titles()['show'] ?? '',
    ]);
  }

  /**
   * Displays a form for editing an existing record.
   *
   * @param  int  $id  The ID of the record to be edited.
   * @return \Illuminate\Http\Response
   */
  public function edit(int $id): \Illuminate\View\View {
    return view(static::CRUD_VIEWS . 'edit', [
      'title' => $this->titles()['edit'] ?? '',
    ]);
  }

  /**
   * Updates an existing record identified by its ID.
   *
   * @param \Illuminate\Http\Request $request The request object containing data.
   * @param int $id The ID of the record to update.
   * @return \Illuminate\Http\RedirectResponse Redirects back to the edit form.
   */
  public function update(Request $request, int $id) {
    //
  }

  /**
   * Deletes a model record by ID.
   *
   * @param  int  $id  The ID of the record to delete.
   * @return \Illuminate\Http\RedirectResponse
   */
  public function destroy(int $id) {
    $this->callHook('beforeDestroy', $id);
    $this->getModelInstance()->findOrFail($id)->delete();
    $this->callHook('afterDestroy', $id);
  }

  /**
   * This method checks whether a method with the given hook name exists in the 
   * current class. If it does, it will be executed with the provided parameters.
   *
   * @param string $hook   The name of the hook/method to call.
   * @param mixed  ...$params  Optional parameters to pass to the hook method.
   * @return void
   */
  protected function callHook(string $hook, ...$params): void {
    if (method_exists($this, $hook)) {
      $this->$hook(...$params);
    }
  }

}