<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a story.
 *
 * @version Telegram Bot API 7.10
 */
final class Story extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Chat that posted the story
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique identifier for the story in the chat
         * @var int
         */
        public int $id,
    ) {
    }
}
