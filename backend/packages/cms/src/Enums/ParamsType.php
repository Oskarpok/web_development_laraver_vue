<?php

declare(strict_types=1);

namespace Op\Cms\Enums;

enum ParamsType: int {
  case Integer = 1;
  case Float = 2;
  case String = 3;
  case Boolean = 4;
  case Json = 5;
  
  public static function toArray(): array {
    return collect(self::cases())
      ->mapWithKeys(fn($case) => [$case->value => $case->name])->toArray();
  }

}