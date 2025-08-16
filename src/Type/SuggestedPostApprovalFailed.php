<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a service message about the failed approval of a suggested post.
 * Currently, only caused by insufficient user funds at the time of approval.
 */
final class SuggestedPostApprovalFailed extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Message containing the suggested post whose approval has failed. Note that the
         * Message object in this field will not contain the reply_to_message field even if
         * it itself is a reply.
         * @var Message
         */
        public ?Message $suggested_post_message,
        /**
         * Expected price of the post
         * @var SuggestedPostPrice
         */
        public SuggestedPostPrice $price,
    ) {
    }
}
