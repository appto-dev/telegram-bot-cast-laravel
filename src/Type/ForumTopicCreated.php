<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a new forum topic created in the
 * chat.
 *
 * @version Telegram Bot API 7.10
 */
final class ForumTopicCreated extends Data implements TelegramTypeContract
{
    public function __construct(
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
