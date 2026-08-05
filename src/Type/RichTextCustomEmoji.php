<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichTextCustomEmoji extends Data implements TelegramType, RichText
{
    public function __construct(
        /** @var  string  Type of the rich text, always "custom_emoji" */
        public string $type,
        /**
         * @var  string  Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full
         * information about the sticker.
         */
        public string $custom_emoji_id,
        /** @var  string  Alternative emoji for the custom emoji */
        public string $alternative_text,
    ) {
    }
}
