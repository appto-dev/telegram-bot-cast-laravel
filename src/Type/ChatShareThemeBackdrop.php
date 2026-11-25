<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class ChatShareThemeBackdrop extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Unique identifier of the backdrop */
        public int $id,
        /** @var  string  Name of the backdrop */
        public string $name,
        /** @var  UniqueGiftBackdropColors  Colors of the backdrop */
        public UniqueGiftBackdropColors $colors,
    ) {
    }
}
