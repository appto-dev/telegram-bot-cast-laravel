<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UniqueGiftBackdropColors extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  The color in the center of the backdrop in RGB format */
        public int $center_color,
        /** @var  int  The color on the edges of the backdrop in RGB format */
        public int $edge_color,
        /** @var  int  The color to be applied to the symbol in RGB format */
        public int $symbol_color,
        /** @var  int  The color for the text on the backdrop in RGB format */
        public int $text_color,
    ) {
    }
}
