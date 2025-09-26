<?php

declare(strict_types=1);

namespace Op\Cms\Models;

use Op\Cms\Traits\DefaultModel;
use Illuminate\Database\Eloquent\Model;

/**
 * Abstract base model providing common logic for CMS models.
 */
abstract class Base extends Model {

  use DefaultModel;

  public function __construct(array $attributes = []) {
    parent::__construct($attributes);
    $this->appends = [...$this->defaultAppends, ...$this->appends ?? []];
    // $this->fillable = [...$this->defaultFillable, ...$this->fillable ?? []];
  }

}