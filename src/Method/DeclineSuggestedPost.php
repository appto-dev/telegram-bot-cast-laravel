<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to decline a suggested post in a direct messages chat. The bot
 * must have the 'can_manage_direct_messages' administrator right in the
 * corresponding channel chat. Returns <em>True</em> on success.
 */
final class DeclineSuggestedPost extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target direct messages chat
         * @var int
         */
        public int $chat_id,
        /**
         * Identifier of a suggested post message to decline
         * @var int
         */
        public int $message_id,
        /**
         * Comment for the creator of the suggested post; 0-128 characters
         * @var string
         */
        public ?string $comment,
    ) {
    }
}
