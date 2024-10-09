<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The background is filled using the selected color.
 *
 * @version Telegram Bot API 7.10
 */
final class BackgroundFillSolid extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the background fill, always "solid"
         * @var string
         */
        public string $type,
        /**
         * The color of the background fill in the RGB24 format
         * @var int
         */
        public int $color,
    ) {
    }
}
