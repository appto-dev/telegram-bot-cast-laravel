<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's description.
 */
final class BotDescription extends Data implements TelegramBotData
{
    public function __construct(
        /** The bot's description */
        public string $description,
    ) {
    }
}
