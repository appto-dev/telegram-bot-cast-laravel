<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to unban a previously banned channel chat in a supergroup or
 * channel. The bot must be an administrator for this to work and must have the
 * appropriate administrator rights. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class UnbanChatSenderChat extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target sender chat
         * @var int
         */
        public int $sender_chat_id,
    ) {
    }
}
