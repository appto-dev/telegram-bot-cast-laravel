<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The background is a wallpaper in the JPEG format.
 */
final class BackgroundTypeWallpaper extends Data implements TelegramBotData, BackgroundType
{
    public function __construct(
        /** Type of the background, always "wallpaper" */
        public string $type,
        /** Document with the wallpaper */
        public Document $document,
        /** Dimming of the background in dark themes, as a percentage; 0-100 */
        public int $dark_theme_dimming,
        /**
         * True, if the wallpaper is downscaled to fit in a 450x450 square and then
         * box-blurred with radius 12
         */
        public ?true $is_blurred,
        /** True, if the background moves slightly when the device is tilted */
        public ?true $is_moving,
    ) {
    }
}
