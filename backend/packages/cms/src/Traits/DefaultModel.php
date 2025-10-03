<?php

declare(strict_types=1);

namespace Op\Cms\Traits;

use Illuminate\Http\Request;

trait DefaultModel {

  /**
   * To do add base tabel apend and fillabe and give childer to expand it
   */
  // protected $defaultAppends = [];
  // protected $defaultFillable = [];
  
  /**
   * Defines the validation rules for the model's attributes.
   * This method provide specific validation rules for data.
   *
   * @return array Validation rules as an associative array.
   */
  abstract public static function validationRules(): array;

  protected function serializeDate(\DateTimeInterface $date){
    return $date->format('Y-m-d H:i:s');
  }

  public function getIsActiveLabelAttribute(): ?string {
    return $this->getAttribute('is_active') ? 'Yes' : 'No';
  }
}