<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a new forum topic created in the
 * chat.
 */
final class ForumTopicCreated extends Data implements TelegramTypeInterface
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
         * @var string
         */
        public ?string $icon_custom_emoji_id,
        /**
         * True, if the name of the topic wasn't specified explicitly by its creator and
         * likely needs to be changed by the bot
         * @var true
         */
        public ?true $is_name_implicit,
    ) {
    }
}
