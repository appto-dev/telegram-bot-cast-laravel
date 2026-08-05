<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class SuggestedPostPaid extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  Message|null  Message containing the suggested post. Note that the Message object in this
         * field will not contain the reply_to_message field even if it itself is a reply.
         */
        public ?Message $suggested_post_message,
        /**
         * @var  string  Currency in which the payment was made. Currently, one of "XTR" for Telegram Stars or
         * "TON" for TON grams.
         */
        public string $currency,
        /**
         * @var  int|null  The amount of the currency that was received by the channel in nanograms; for
         * payments in TON grams only
         */
        public ?int $amount,
        /**
         * @var  StarAmount|null  The amount of Telegram Stars that was received by the channel; for payments
         * in Telegram Stars only
         */
        public ?StarAmount $star_amount,
    ) {
    }
}
