<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ForumTopic extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Unique identifier of the forum topic */
        public int $message_thread_id,
        /** @var  string  Name of the topic */
        public string $name,
        /** @var  int  Color of the topic icon in RGB format */
        public int $icon_color,
        /** @var  string|null  Unique identifier of the custom emoji shown as the topic icon */
        public ?string $icon_custom_emoji_id,
        /**
         * @var  true|null  True, if the name of the topic wasn't specified explicitly by its creator and
         * likely needs to be changed by the bot
         */
        public ?true $is_name_implicit,
    ) {
    }
}
