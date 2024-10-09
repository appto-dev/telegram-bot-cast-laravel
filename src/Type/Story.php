<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a story.
 *
 * @version Telegram Bot API 7.10
 */
final class Story extends Data implements TelegramTypeContract
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
