<?php

declare(strict_types=1);

namespace Op\Cms\View\FormFields\Buttons;

class ButtonsTypeController extends \Op\Cms\View\FormFields\BaseControl {

  protected function controlMap(): array {
    return [
      'anchore' => Fields\AnchoreControl::class,
    ];
  }

}