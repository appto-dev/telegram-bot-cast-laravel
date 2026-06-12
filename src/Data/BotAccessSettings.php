<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object describes the access settings of a bot.
 */
final class BotAccessSettings extends Data implements TelegramBotData
{
    public function __construct(
        /** True, if only selected users can access the bot. The bot's owner can always access it. */
        public bool $is_access_restricted,
        /**
         * The list of other users who have access to the bot if the access is restricted
         * @var array<User>
         */
        public ?array $added_users,
    ) {
    }
}
