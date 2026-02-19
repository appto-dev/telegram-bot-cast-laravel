<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about a successful payment for a suggested post.
 */
final class SuggestedPostPaid extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message
         * field even if it itself is a reply.
         */
        public ?Message $suggested_post_message,
        /** Currency in which the payment was made. Currently, one of "XTR" for Telegram Stars or "TON" for toncoins */
        public string $currency,
        /** The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only */
        public ?int $amount,
        /** The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only */
        public ?StarAmount $star_amount,
    ) {
    }
}
