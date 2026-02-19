<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a change in the price of paid messages within a chat.
 */
final class PaidMessagePriceChanged extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent
         * message
         */
        public int $paid_message_star_count,
    ) {
    }
}
