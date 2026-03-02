<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 */
final class DirectMessagePriceChanged extends Data implements TelegramBotData
{
    public function __construct(
        /** True, if direct messages are enabled for the channel chat; false otherwise */
        public bool $are_direct_messages_enabled,
        /**
         * The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does
         * not apply to users who have been exempted by administrators. Defaults to 0.
         */
        public ?int $direct_message_star_count,
    ) {
    }
}
