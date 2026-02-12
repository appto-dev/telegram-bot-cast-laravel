<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundFill;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The background is filled using the selected color.
 */
final class BackgroundFillSolid extends Data implements TelegramBotData, BackgroundFill
{
    public function __construct(
        /** Type of the background fill, always "solid" */
        public string $type,
        /** The color of the background fill in the RGB24 format */
        public int $color,
    ) {
    }
}
