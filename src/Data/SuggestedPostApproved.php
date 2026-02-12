<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about the approval of a suggested post.
 */
final class SuggestedPostApproved extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Message containing the suggested post. Note that the Message object in this
         * field will not contain the reply_to_message field even if it itself is a reply.
         */
        public ?Message $suggested_post_message,
        /** Amount paid for the post */
        public ?SuggestedPostPrice $price,
        /** Date when the post will be published */
        public int $send_date,
    ) {
    }
}
