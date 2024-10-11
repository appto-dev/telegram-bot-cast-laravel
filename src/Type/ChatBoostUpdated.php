<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a boost added to a chat or changed.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBoostUpdated extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Chat which was boosted
         * @var Chat
         */
        public Chat $chat,
        /**
         * Information about the chat boost
         * @var ChatBoost
         */
        public ChatBoost $boost,
    ) {
    }
}
