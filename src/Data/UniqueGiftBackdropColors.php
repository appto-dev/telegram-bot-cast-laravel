<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object describes the colors of the backdrop of a unique gift.
 */
final class UniqueGiftBackdropColors extends Data implements TelegramBotData
{
    public function __construct(
        /** The color in the center of the backdrop in RGB format */
        public int $center_color,
        /** The color on the edges of the backdrop in RGB format */
        public int $edge_color,
        /** The color to be applied to the symbol in RGB format */
        public int $symbol_color,
        /** The color for the text on the backdrop in RGB format */
        public int $text_color,
    ) {
    }
}
