<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class SuggestedPostApproved extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  Message|null  Message containing the suggested post. Note that the Message object in this
         * field will not contain the reply_to_message field even if it itself is a reply.
         */
        public ?Message $suggested_post_message,
        /** @var  SuggestedPostPrice|null  Amount paid for the post */
        public ?SuggestedPostPrice $price,
        /** @var  int  Date when the post will be published */
        public int $send_date,
    ) {
    }
}
