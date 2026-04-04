<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object contains information about the creation or token update of a bot that is managed by the current
 * bot.
 */
final class ManagedBotUpdated extends Data implements TelegramBotData
{
    public function __construct(
        /** User that created the bot */
        public User $user,
        /** Information about the bot. Token of the bot can be fetched using the method getManagedBotToken. */
        public User $bot,
    ) {
    }
}
