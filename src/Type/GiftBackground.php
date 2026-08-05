<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class GiftBackground extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Center color of the background in RGB format */
        public int $center_color,
        /** @var  int  Edge color of the background in RGB format */
        public int $edge_color,
        /** @var  int  Text color of the background in RGB format */
        public int $text_color,
    ) {
    }
}
