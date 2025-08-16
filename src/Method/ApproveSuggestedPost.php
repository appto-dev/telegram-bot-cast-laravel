<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to approve a suggested post in a direct messages chat. The bot
 * must have the 'can_post_messages' administrator right in the corresponding
 * channel chat. Returns <em>True</em> on success.
 */
final class ApproveSuggestedPost extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target direct messages chat
         * @var int
         */
        public int $chat_id,
        /**
         * Identifier of a suggested post message to approve
         * @var int
         */
        public int $message_id,
        /**
         * Point in time (Unix timestamp) when the post is expected to be published; omit
         * if the date has already been specified when the suggested post was created. If
         * specified, then the date must be not more than 2678400 seconds (30 days) in the
         * future
         * @var int
         */
        public ?int $send_date,
    ) {
    }
}
