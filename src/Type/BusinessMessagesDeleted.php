<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * BusinessMessagesDeleted
 *
 * This object is received when messages are deleted from a connected business
 * account.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BusinessMessagesDeleted extends Dto implements TypeInterface
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /**
         * Information about a chat in the business account. The bot may not have
         * access to the chat or the corresponding user.
         */
        public Chat $chat,
        /**
         * A JSON-serialized list of identifiers of deleted messages in the chat
         * of the business account
         * @var array<int>
         */
        public array $message_ids,
    ) {
    }
}
