<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's name.
 */
final class BotName extends Data implements TelegramBotData
{
    public function __construct(
        /** The bot's name */
        public string $name,
    ) {
    }
}
