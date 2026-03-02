<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a chat background.
 */
final class ChatBackground extends Data implements TelegramBotData
{
    public function __construct(
        /** Type of the background */
        public BackgroundType $type,
    ) {
    }
}
