<?php

declare(strict_types=1);

namespace Op\Cms\Enums;

enum UsersType: int {
  case Administrator = 1;
  case Owner = 2;
  case Manager = 3;
  case CmsUser = 4;
  case User = 5;

  public static function toArray(): array {
    return collect(self::cases())
      ->mapWithKeys(fn($case) => [$case->value => $case->name])->toArray();
  }
}