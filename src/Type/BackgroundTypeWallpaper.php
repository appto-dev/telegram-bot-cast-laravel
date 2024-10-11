<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The background is a wallpaper in the JPEG format.
 *
 * @version Telegram Bot API 7.10
 */
final class BackgroundTypeWallpaper extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background, always "wallpaper"
         * @var string
         */
        public string $type,
        /**
         * Document with the wallpaper
         * @var Document
         */
        public Document $document,
        /**
         * Dimming of the background in dark themes, as a percentage; 0-100
         * @var int
         */
        public int $dark_theme_dimming,
        /**
         * True, if the wallpaper is downscaled to fit in a 450x450 square and then
         * box-blurred with radius 12
         * @var true
         */
        public ?true $is_blurred,
        /**
         * True, if the background moves slightly when the device is tilted
         * @var true
         */
        public ?true $is_moving,
    ) {
    }
}
