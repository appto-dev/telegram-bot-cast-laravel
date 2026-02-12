<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundFill;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The background is a gradient fill.
 */
final class BackgroundFillGradient extends Data implements TelegramBotData, BackgroundFill
{
    public function __construct(
        /** Type of the background fill, always "gradient" */
        public string $type,
        /** Top color of the gradient in the RGB24 format */
        public int $top_color,
        /** Bottom color of the gradient in the RGB24 format */
        public int $bottom_color,
        /** Clockwise rotation angle of the background fill in degrees; 0-359 */
        public int $rotation_angle,
    ) {
    }
}
