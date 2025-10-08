<?php

declare(strict_types=1);

namespace Op\Cms\View\FormFields\Extra;

class ExtraTypeController extends \Op\Cms\View\FormFields\BaseControl {

  protected function controlMap(): array {
    return [
      'intex' => Fields\TableControl::class,   
    ];
  }

}