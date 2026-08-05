<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ForumTopicEdited extends Data implements TelegramType
{
    public function __construct(
        /** @var  string|null  New name of the topic, if it was edited */
        public ?string $name,
        /**
         * @var  string|null  New identifier of the custom emoji shown as the topic icon, if it was edited; an
         * empty string if the icon was removed
         */
        public ?string $icon_custom_emoji_id,
    ) {
    }
}
