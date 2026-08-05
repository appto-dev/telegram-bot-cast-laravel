<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BackgroundTypeChatTheme extends Data implements TelegramType, BackgroundType
{
    public function __construct(
        /** @var  string  Type of the background, always "chat_theme" */
        public string $type,
        /** @var  string  Name of the chat theme, which is usually an emoji */
        public string $theme_name,
    ) {
    }
}
