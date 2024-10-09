<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a forum topic.
 *
 * @version Telegram Bot API 7.10
 */
final class ForumTopic extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier of the forum topic
         * @var int
         */
        public int $message_thread_id,
        /**
         * Name of the topic
         * @var string
         */
        public string $name,
        /**
         * Color of the topic icon in RGB format
         * @var int
         */
        public int $icon_color,
        /**
         * Unique identifier of the custom emoji shown as the topic icon
         * @var string|null
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
