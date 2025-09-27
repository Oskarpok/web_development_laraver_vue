<?php

declare(strict_types=1);

namespace Op\Cms\Traits;

trait DefaultModel {

  /**
   * To do add funcjonality to tabel apend i fillabe to give childer nto 
   * expand this array on them
   */

  protected $defaultAppends = ['is_active_label'];

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