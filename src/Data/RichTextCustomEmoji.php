<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A custom emoji.
 */
final class RichTextCustomEmoji extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "custom_emoji" */
        public string $type,
        /** Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker. */
        public string $custom_emoji_id,
        /** Alternative emoji for the custom emoji */
        public string $alternative_text,
    ) {
    }
}
