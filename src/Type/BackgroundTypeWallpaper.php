<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BackgroundTypeWallpaper extends Data implements TelegramType, BackgroundType
{
    public function __construct(
        /** @var  string  Type of the background, always "wallpaper" */
        public string $type,
        /** @var  Document  Document with the wallpaper */
        public Document $document,
        /** @var  int  Dimming of the background in dark themes, as a percentage; 0-100 */
        public int $dark_theme_dimming,
        /**
         * @var  true|null  True, if the wallpaper is downscaled to fit in a 450x450 square and then
         * box-blurred with radius 12
         */
        public ?true $is_blurred,
        /** @var  true|null  True, if the background moves slightly when the device is tilted */
        public ?true $is_moving,
    ) {
    }
}
