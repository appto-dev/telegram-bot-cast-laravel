<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represent a list of gifts.
 */
final class Gifts extends Data implements TelegramBotData
{
    public function __construct(
        /** The list of gifts */
        public Gift $gifts,
    ) {
    }
}
