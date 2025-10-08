<?php

declare(strict_types=1);

namespace Op\Cms\View\FormFields\Extra;

abstract class BaseExtraField extends \Op\Cms\View\FormFields\BaseField {

  public function __construct(array $data) {
    parent::__construct($data);
  }

}