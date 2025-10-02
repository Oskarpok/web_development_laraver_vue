<?php

declare(strict_types=1);

namespace Op\Cms\View\FormFields\Buttons\Fields;

class AnchoreControl extends \Op\Cms\View\FormFields\Buttons\BaseButtonsField {

  protected string $route;

  public function __construct(array $data) {
    parent::__construct($data);
    $this->route = $data['route'];
  }

  protected function resolveView(): string {
    return 'cms::components.form_fields.cms_button.anchore';
  }

}