<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatShareThemeEmoji extends Data implements TelegramType, ChatShareTheme
{
    public function __construct(
        /** @var  string  Type of the theme, always "emoji" */
        public string $type,
        /** @var  EmojiType[]  The emoji; 0-6 regular or custom emoji */
        public array $emojis,
        /**
         * @var  int|null  Identifier of the backdrop used as the background; omitted if the default background
         * is used. Use getChatShareThemeBackdrops to get details about the backdrop.
         */
        public ?int $background_backdrop_id,
    ) {
    }
}
