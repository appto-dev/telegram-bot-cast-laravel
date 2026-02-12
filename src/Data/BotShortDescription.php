<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's short description.
 */
final class BotShortDescription extends Data implements TelegramBotData
{
    public function __construct(
        /** The bot's short description */
        public string $short_description,
    ) {
    }
}
