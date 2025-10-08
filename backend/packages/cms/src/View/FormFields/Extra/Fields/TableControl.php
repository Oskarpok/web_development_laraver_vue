<?php

declare(strict_types=1);

namespace Op\Cms\View\FormFields\Extra\Fields;


class TableControl extends \Op\Cms\View\FormFields\Extra\BaseExtraField {  

  protected array $labels;
  protected array $data;
  protected array $filterable;
  protected string $destinations;

  public function __construct(array $data) {
    parent::__construct($data);
    $this->labels = $data['labels'];
    $this->data = $data['data'] 
      instanceof \Illuminate\Database\Eloquent\Collection
      ? $data['data']->toArray()
      : $data['data'];
    $this->filterable = $data['filterable'];
    $this->destinations = $data['destinations'];
  }

  protected function resolveView(): string {
    return 'cms::components.form_fields.cms_extra.intex';
  }
}