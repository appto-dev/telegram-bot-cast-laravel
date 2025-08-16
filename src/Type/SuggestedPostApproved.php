<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about the approval of a suggested post.
 */
final class SuggestedPostApproved extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Message containing the suggested post. Note that the Message object in this
         * field will not contain the reply_to_message field even if it itself is a reply.
         * @var Message
         */
        public ?Message $suggested_post_message,
        /**
         * Amount paid for the post
         * @var SuggestedPostPrice
         */
        public ?SuggestedPostPrice $price,
        /**
         * Date when the post will be published
         * @var int
         */
        public int $send_date,
    ) {
    }
}
