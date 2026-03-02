<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about an edited forum topic.
 */
final class ForumTopicEdited extends Data implements TelegramBotData
{
    public function __construct(
        /** New name of the topic, if it was edited */
        public ?string $name,
        /**
         * New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was
         * removed
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
