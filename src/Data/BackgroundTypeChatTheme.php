<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The background is taken directly from a built-in chat theme.
 */
final class BackgroundTypeChatTheme extends Data implements TelegramBotData, BackgroundType
{
    public function __construct(
        /** Type of the background, always "chat_theme" */
        public string $type,
        /** Name of the chat theme, which is usually an emoji */
        public string $theme_name,
    ) {
    }
}
