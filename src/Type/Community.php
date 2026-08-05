<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Community extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique identifier for this community. This number may have more than 32 significant bits
         * and some programming languages may have difficulty/silent defects in interpreting it. But it has at
         * most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for
         * storing this identifier.
         */
        public int $id,
        /** @var  string  Name of the community */
        public string $name,
    ) {
    }
}
