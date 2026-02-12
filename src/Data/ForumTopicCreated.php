<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a new forum topic created in the
 * chat.
 */
final class ForumTopicCreated extends Data implements TelegramBotData
{
    public function __construct(
        /** Name of the topic */
        public string $name,
        /** Color of the topic icon in RGB format */
        public int $icon_color,
        /** Unique identifier of the custom emoji shown as the topic icon */
        public ?string $icon_custom_emoji_id,
        /**
         * True, if the name of the topic wasn't specified explicitly by its creator and
         * likely needs to be changed by the bot
         */
        public ?true $is_name_implicit,
    ) {
    }
}
