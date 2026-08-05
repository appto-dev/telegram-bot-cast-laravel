<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BackgroundFillFreeformGradient extends Data implements TelegramType, BackgroundFill
{
    public function __construct(
        /** @var  string  Type of the background fill, always "freeform_gradient" */
        public string $type,
        /**
         * @var  int[]  A list of the 3 or 4 base colors that are used to generate the freeform gradient in the
         * RGB24 format
         */
        public array $colors,
    ) {
    }
}
