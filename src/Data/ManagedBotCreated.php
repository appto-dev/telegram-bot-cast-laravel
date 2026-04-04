<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 */
final class ManagedBotCreated extends Data implements TelegramBotData
{
    public function __construct(
        /** Information about the bot. The bot's token can be fetched using the method getManagedBotToken. */
        public User $bot,
    ) {
    }
}
