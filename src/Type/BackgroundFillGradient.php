<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BackgroundFillGradient extends Data implements TelegramType, BackgroundFill
{
    public function __construct(
        /** @var  string  Type of the background fill, always "gradient" */
        public string $type,
        /** @var  int  Top color of the gradient in the RGB24 format */
        public int $top_color,
        /** @var  int  Bottom color of the gradient in the RGB24 format */
        public int $bottom_color,
        /** @var  int  Clockwise rotation angle of the background fill in degrees; 0-359 */
        public int $rotation_angle,
    ) {
    }
}
