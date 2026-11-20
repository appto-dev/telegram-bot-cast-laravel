<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class EmojiTypeCustomEmoji extends Data implements TelegramType, EmojiType
{
    public function __construct(
        /** @var  string  Type of the emoji, always "custom_emoji" */
        public string $type,
        /**
         * @var  string  Identifier of the custom emoji. Use getCustomEmojiStickers to get full information
         * about the sticker.
         */
        public string $custom_emoji_id,
    ) {
    }
}
