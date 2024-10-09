<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object is received when messages are deleted from a connected business
 * account.
 *
 * @version Telegram Bot API 7.10
 */
final class BusinessMessagesDeleted extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Information about a chat in the business account. The bot may not have access to
         * the chat or the corresponding user.
         * @var Chat
         */
        public Chat $chat,
        /**
         * The list of identifiers of deleted messages in the chat of the business account
         * @var array<int>
         */
        public int $message_ids,
    ) {
    }
}
